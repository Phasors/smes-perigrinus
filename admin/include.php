
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="db/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="db/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="db/select.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="db/css/editor.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="db/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="db/resources/demo.css">
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

	<script type="text/javascript" language="javascript" src="db/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="db/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="db/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="db/dataTables.select.min.js"></script>
	<script type="text/javascript" language="javascript" src="db/js/dataTables.editor.min.js"></script>
	<script type="text/javascript" language="javascript" src="db/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="db/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" src="db/resources/editor-demo.js"></script>
	

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