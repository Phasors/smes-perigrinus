<?php
	class Connection extends mysqli
	{

		/* login module */
        public $mode = "login";
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
			$res = $this->query("SELECT username, pswrd FROM users WHERE username='$user'");
			if ($res->num_rows)
			{
					$row = $res->fetch_assoc();
					if ($user === $row['username'] && $pass === $row['pswrd'])
					{
							unset($_SESSION['err']);
							$_SESSION['user'] = $user;
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

		public function get_entries()
		{
		}

		/*

		*/
		public function add_entry($entries, $debits, $credits)
		{
			$stmt = $this->prepare("INSERT INTO accounting_journal(person_id, date, account_title, debit, credit) VALUES (?, ?, ?, ?, ?)");
			$stmt->bind_param("issdd",$per, $da, $acc_name, $deb, $cred);
			$d = date("Y-m-d H:i:s");
			$rows = count($entries);
			for ($i = 0; $i < $rows; $i++)
			{
				$per = 1;
				$da = $d;
				$acc_name = $entries[$i];
				$deb = $debits[$i];
				$cred = $credits[$i];
				$stmt->execute();
			}

			$stmt->close();
		}
	};
?>
