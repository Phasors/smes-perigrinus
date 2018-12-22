<html>
<head>
	<script src="assets/css/jquery/jquery.min.js"></script>
	<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<link href="assets/css/datatables/css/dt-custom.css" rel="stylesheet">
	<script src="assets/css/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/css/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script src="assets/css/datatables-responsive/dataTables.responsive.js"></script>
	<!-- automatic logout after 5 minutes
	<meta http-equiv="refresh" content="300;url=logout.php" />
-->
	<title>ADMIN</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">ADMIN</a>
			</div>
			<ul class="nav navbar-nav">
				<?php
				include('session.php');
				if(($_SESSION['category']==7)&&($_SESSION['type']==3)){
					echo '<li ><a href="dbmgmt.php">Database Administration</a></li>';
				}
				?>
				<li><a href="cms.php">CMS</a></li>
				<li><a href="usermgmt.php">User Management</a></li>
				<li style="text-align:right"><a href = "logout.php">Log out</a></li>
			</ul>
		</div>
	</nav>
</body>
</php>