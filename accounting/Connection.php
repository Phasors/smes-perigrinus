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
		};
?>
