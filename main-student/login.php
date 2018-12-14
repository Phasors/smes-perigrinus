<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../img/logo-site.png">
	<title>Login Student - Perigrinus School</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../components/style.css">
	<link rel="stylesheet" href="main.css">
</head>
<body >

<?php include'../components/sub-navbar.php'; ?>

	<div class="container">
		<div class="login">
			<div class="row">
				<div class="col-sm-6">
					<img src="../img/logo-edited.png" class="login-logo d-block mx-auto">
				</div>
				<div class="col-sm-5">
					<div class="card login-form">
						
						<div class="card-body">
							<h3 class="text-center login-title">SIS STUDENT LOGIN FORM</h3>
							<hr style="border-top: 1px solid #c2ebed;"><br>
							<div class="row">
								<div class="col-sm-8 offset-md-2">
									<input type="text" id="username" placeholder="Username" class="form-control">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-8 offset-md-2">
									<input type="password" id="pwd" placeholder="Password" class="form-control">
								</div>
							</div>
							<br><br>
							<div class="row">

								<div class="col-sm-12">
									<button class="btn btn-default btn-menu-ctm d-block mx-auto" style="width: 100%;">LOGIN</button>
								</div>
								
							</div>
							<div class="row">
								<div class="col-sm-12">
									<button class="btn btn-default btn-menu-ctm d-block mx-auto" style="background-color: #007a81 !important; width: 100%; margin-top: 4px;">NEW STUDENT?</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- SCRIPTS -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../js/design.js"></script>

	<script src="../components/design.js"></script>



</body>

</html>