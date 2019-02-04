<?php
		class Connection extends mysqli
		{
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
				public function check_sess()
				{
						if (!isset($_SESSION))
							session_start();
				}
		
				public function persist_log()
				{
						if (!isset($_SESSION['user']))
								header('location: login.php');
				}

				public function logout()
				{
						if (isset($_POST['logout'])) {
								unset($_SESSION['user']);
								session_destroy();
								header('location: login.php');
						}
				}

				public function get_fees()
				{
						return $this->query("SELECT * FROM fees");		
				}

				public function change_fee($id, $price)
				{
						if (isset($_POST[$price]))
						{
								$np = $_POST[$price];
								$sql = "UPDATE fees SET price='$np' WHERE fee_id='$id'";
								if ($this->query($sql))
										$_SESSION['msg'] = "Updated Successfully";
								else
										$_SESSION['msg'] = "Update Failed";
								header('location: content.php');
						}
				}

				public function delete_fee($fee_id)
				{
						if (isset($_POST['del']) && isset($_POST[$fee_id]))
						{
								$id = $_POST[$fee_id];
								$sql = "DELETE FROM fees WHERE fee_id='$id'";
								$_SESSION['msg'] = ($this->query($sql) ? "Deleted Successfully" : "Delete Failed");
						}
				}
				public function insert_fee($fee_type, $price)
				{
						if (isset($_POST[$fee_type]) && isset($_POST[$price]))
						{
								$ft = $_POST[$fee_type];
								$pr = $_POST[$price];
								$sql = "INSERT INTO fees (fee_id, fee_type, price) VALUES (NULL, '$ft', '$pr')";
								$_SESSION['msg'] = ($this->query($sql) ? "Added Successfully" : "Adding Failed");
								header('location: content.php');
						}
				}

				public function get_enrollees()
				{
						return $this->query("SELECT * FROM cashiering_module WHERE transact_type='enrollment'");
				}

		};
?>
