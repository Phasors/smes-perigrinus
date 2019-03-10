<?php
	class Connection extends mysqli
	{

		/* login module */
        public $mode = "login";
		public $msg = "";
		public $cur_user = "";
		public $user_id;
		function __construct($server, $user, $pass, $dbname)
		{
			return parent::__construct($server, $user, $pass, $dbname);
		}

		/*
		 * Login authenticator
		 * @param string $user Username
		 * @param string $pass Password
		 * @return nothing
		 */
		public function authenticate($user, $pass)
		{
			$res = $this->query("SELECT user_id, username, pswrd FROM users WHERE username='$user'");
			if ($res->num_rows)
			{
					$row = $res->fetch_assoc();
					if ($user === $row['username'] && $pass === $row['pswrd'])
					{
							$cur_user = $user;
							$user_id = $row['user_id'];
							unset($_SESSION['err']);
							$_SESSION['user'] = $user;
							$_SESSION['user_id'] = $row['user_id'];
							header('location: dashboard.php');
					}
					else
							$_SESSION['err'] = 'Invalid Credentials';
			}
			else
					$_SESSION['err'] = 'Invalid Credentials';
		}

		/* Checking if session is already started. If not, start it;
		 * @return nothing
		 *
		 */
		public function set_sess()
		{
				if (!isset($_SESSION))
					session_start();
                if (!isset($_POST['user']))
                    $mode = 'login';
		}

		public function persist_log()
		{
			if (!isset($_SESSION['user']))
				header("location: login.php");
		}
		public function persist()
		{
			if (isset($_SESSION['user']))
				header("location: dashboard.php");
		}
		public function logout()
		{
			unset($_SESSION['user']);
			session_destroy();
			header("location: login.php");
		}
		/* end of login */

		/* journal entries */

		public function get_accounts()
		{
			$results = $this->query("SELECT * FROM accounts");
			$accounts = [];

			while ($row = $results->fetch_assoc())
				$accounts[] = array("account_id" => $row['account_id'], "account_name" => $row['account_name']);

			return $accounts;
		}
		public function get_entries()
		{
			return $this->query("SELECT accounting_journal.accounting_journal_id, accounting_journal.date, accounting_journal.credit, accounting_journal.debit,
				accounting_journal.description, accounts.account_name, users.username FROM accounting_journal INNER JOIN accounts ON
	       		accounting_journal.account_id=accounts.account_id INNER JOIN users ON accounting_journal.user_id=users.user_id");
		}
		/*

		*/
		public function add_entry($entries, $description, $debits, $credits)
		{
			$this->set_sess();
			$stmt = $this->prepare("INSERT INTO accounting_journal(user_id, date, account_id, description, debit, credit) VALUES (?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("isssdd",$per, $da, $acc_id, $desc, $deb, $cred);
			$d = date("Y-m-d H:i:s");
			$rows = count($entries);
			for ($i = 0; $i < $rows; $i++)
			{
				$per = $_SESSION['user_id'];
				$da = $d;
				$desc = $description[$i];
				$acc_id = $entries[$i];
				$deb = $debits[$i];
				$cred = $credits[$i];
				$stmt->execute();
			}

			$this->msg = "Entry Added Successfully";
			$stmt->close();
		}


		public function get_balances($date)
		{
		    $accounts = $this->get_accounts();
		    $rows = [];
		    foreach ($accounts as $account) {
		        $id = $account['account_id'];
		        $res = $this->query("SELECT accounts.account_name, IFNULL(SUM(debit), 0) AS db, IFNULL(SUM(credit),0) AS cb FROM
		        accounting_journal INNER JOIN accounts ON
		        accounting_journal.account_id=accounts.account_id WHERE accounting_journal.account_id = $id AND date <= '$date'");
		        while ($row = $res->fetch_array())
		            $rows[] = $row;
		    }
			return $rows;
		}
	};
