<?php
require_once 'db.php';

$acc->check_sess();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--bootstrap-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<?php if(isset($_SESSION['user'])): ?>
		<link rel="stylesheet" href="assets/css/dashboard.css">
	<?php endif ?>
	<?php if(!isset($_SESSION['user'])): ?>
		<link rel="stylesheet" href="assets/css/signin.css">
	<?php endif ?>
		<link rel="stylesheet" href="assets/datatables/dataTables.bootstrap4.min.css">
	<title></title>
</head>
<?php if(isset($_SESSION['user'])): ?>
<body>
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">SMES Perigrinus</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        </li>
        <li class="nav-item text-nowrap">
					<form method="post">
						<button class="btn" type="submit" name="logout">Log out</button>
					</form>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Professors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="enrollment.php">
                  <span data-feather="file"></span>
                  Enrollment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cashiering.php">
                  <span data-feather="file-text"></span>
                  Cashiering
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="content.php">
                  <span data-feather="file-text"></span>
                  Content
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reports.php">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
            </ul>
          </div>
        </nav>
			</div>
		</div>
		<?php endif ?>
