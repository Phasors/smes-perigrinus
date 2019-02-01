
<?php
	require_once 'db.php';
	$acc->check_sess();
	if (isset($_SESSION['user']))
		header('location: dashboard.php');
	unset($_SESSION['err']);
	if (isset($_POST['username']))
		$acc->authenticate($_POST['username'], $_POST['password']);
?>
<?php include('header.php'); ?>
	<body class="text-center">
			<div class="container">
			<?php if(isset($_SESSION['err'])): ?>
				<div class="alert alert-danger">
					<h5><?= $_SESSION['err'] ?></h5>
				</div>
			<?php endif ?>
				<form class="form-signin" method="post">
					<h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
					<hr>
					<div class="form-group">
						<label for="username" class="sr-only">Email address</label>
						<input type="username" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
					</div>
					<div class="checkbox mb-3">
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
					<p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
				</form>
			</div>
  </body>
</html>

<?php include('footer.php'); ?> 
