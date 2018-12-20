<?php
    if(!isset($_SESSION)){
        session_start();
    }
	include("connect.php");
	if(!isset($_SESSION['error'])){
		$_SESSION['error'] = "";
	}
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$pword = mysqli_real_escape_string($db, $_POST['pword']); 

	$sql = "SELECT * FROM users WHERE username = '$username' AND pswrd = '$pword' AND active=0 ";
	$result = mysqli_query($db, $sql);

	if($row = mysqli_fetch_array($result)){
		if( $row['type']== "1"){
			$_SESSION['username'] = $row['username'];
			header("location: dbmgmt");
		}
		else{
			$_SESSION['error'] = "Restricted Site";
		}				
	}
	else{
		$_SESSION['error'] = "Your Login Name or Password is invalid";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/form-elements.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="top-content">
		<div class="inner-bg">
			<div class="container" >
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 text" >
						<div class="panel-heading" style="background-color: #228B22">								
							<h3 style="color: white;">
								<strong>ADMIN</strong>
							</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box" >
						<div class="form-bottom">
							<form action="" method="post">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" placeholder="Username" class="form-control" required>
									<label>Password</label>
									<input type="password" name="pword" placeholder="Password" class="form-control" required>
								</div>
								<center>
									<input type="submit" class="btn btn-success" value= "Login" style="width:50%;" >
								</center>
							</form>
							<center>
								<div class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>