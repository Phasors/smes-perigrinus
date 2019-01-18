
<?php include 'header.php'; ?>

<?php include 'components/topbar.php';

 ?>

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="">
				<img src="img/logo-site.png" class="d-block mx-auto logo">
			</div>
		</div>
		<div class="col-sm-8" style="margin-top: 2%;">
			<div class="center">
				<span class="welcome">PERIGRINUS SCHOOL</span>
				<span class="stud-name">Welcome, <?php  echo $_SESSION['username'];?></span>
			</div>
		</div>
	</div>
	<hr>
	<br>
	<div class="margin">
		<div class="row">
			<div class="col-sm-2 col-3 offset-md-1">
				<a href="grade.php"><img src="img/grade-icon.png" class="icon block"></a>
			</div>
			<div class="col-sm-2 col-3">
				<a href="schedule.php"><img src="img/sched-icon.png" class="icon block"></a>
			</div>
			<div class="col-sm-2 col">
				<a href="#record"><img src="img/record-icon.png" class="icon block"></a>
			</div>
			<div class="col-sm-2 col">
				<a href="myprofile.php"><img src="img/profile-icon.png" class="icon block"></a>
			</div>
			<div class="col-sm-2 col">
				<a href="library.php"><img src="img/library-icon.png" class="icon block"></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 col offset-md-3">
				<a href="announcement.php"><img src="img/announcement-icon.png" class="icon block"></a>
			</div>
			<div class="col-sm-2 col">
				<a href="#sched"><img src="img/registration-icon.png" class="icon block"></a>
			</div>
			<div class="col-sm-2 col">
				<a href="request.php"><img src="img/request-icon.png" class="icon block"></a>
			</div>
		</div>
	</div>
</div>


<?php include 'components/footer.php'; ?>
