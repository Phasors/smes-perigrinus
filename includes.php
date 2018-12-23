<html>
<head>
	<script src="assets/modal/jquery.min.js"></script>
	<script src="assets/modal/bootstrap.min.js"></script>
	<script src="assets/css/jquery/jquery.min.js"></script>
	<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/script.js"></script>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<link href="assets/css/datatables/css/dt-custom.css" rel="stylesheet">
	<script src="assets/css/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/css/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script src="assets/css/datatables-responsive/dataTables.responsive.js"></script>

	<!-- automatic logout after 5 minutes -->
	<meta http-equiv="refresh" content="300;url=logout.php" />
	<title>ADMIN</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">ADMIN</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Role <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Academic Head</a></li>
						<li><a href="#">Accounting</a></li>
						<li><a href="#">Admission</a></li>
						<li><a href="#">Cashier</a></li>
						<li><a href="#">Chairperson</a></li>
						<li><a href="#">Guidance Office</a></li>
						<li><a href="#">Library</a></li>
						<li><a href="#">Professor</a></li>
						<li><a href="#">Registrar</a></li>
						<li><a href="#">Student</a></li>
					</ul>
				</li>
				<li ><a href="dbmgmt.php">Database Administration</a></li>
				<li><a href="cms.php">CMS</a></li>
				<li><a href="usermgmt.php">User Management</a></li>
				<li style="text-align:right"><a href = "logout.php">Log out</a></li>
			</ul>
		</div>
	</nav>
</body>
</php>