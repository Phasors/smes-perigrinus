
<html>
<head>
	<script src="assets/modal/jquery.min.js"></script>
	<script src="assets/modal/bootstrap.min.js"></script>
	<script src="assets/css/jquery/jquery.min.js"></script>
	<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/css/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/css/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script src="assets/css/datatables-responsive/dataTables.responsive.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="db/jquery.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/datatables/css/dt-custom.css" >
	<link rel="stylesheet" href="assets/style.css">
	

	

	<!-- automatic logout after 5 minutes 
		<meta http-equiv="refresh" content="300;url=logout.php" /> -->
		<title>ADMIN</title>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">ADMIN</a>
				</div>
				<ul class="nav navbar-nav">
					<li ><a href="dbmgmt.php">Database Administration</a></li>
					<li><a href="cms.php">Content Management System</a></li>
					<li><a href="usermgmt.php">User Management</a></li>
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
					<li style="text-align:right"><a href = "logout.php">Log out</a></li>
				</ul>
			</div>
		</nav>
	</body>
</php>