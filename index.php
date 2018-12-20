<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" contents="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/logo-site.png">
	<title>Perigrinus School</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/design.js"></script>
	<link  href="main.css" rel="stylesheet">
</head>
<body>

	<?php include'components/index-navbar.php'; ?>
		<!--Image Slider-->

		<div id="img-gallery" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#img-gallery" data-slide-to="0" class="active"></li>
				<li data-target="#img-gallery" data-slide-to="1"></li>
				<li data-target="#img-gallery" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/gallery/images.jpg" alt="First slide">
					<div class="carousel-caption">
						<h1 class="display-6" style="color:#e3e0cc"> "School of Knowledge, Skills and Excellence" </h1>
						<h2 style="color:#f0f0f0"> Perigrinus School </h2>
						<a href="online_services/index_ps_iapply.php" class="btn btn-outline-light btn-lg"> Apply Now! </a>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/gallery/images_1.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/gallery/images_2.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#img-gallery" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#img-gallery" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!--Jumbotron-->
		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
					<p class="lead"> Perigrinus School Services include primary to college level teaching, career, individual and academic counseling, course selection, 4-5 year planning, scheduling, financial aid guidance and grade reporting services.</p>				
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
					<a href="home-services/service.php"><button type="button" class="btn btn-outline-secondary btn-lg"> See Services </button></a>
				</div>
			</div>
		</div>

		<!--Welcome note-->
		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-3" style="font-size: 60px"> Building success together. </h1>									
				</div>	
				<div class="col-12">
					<hr class="style">
				</div>	
				<div class="col-12">
					<p class="lead" style="font-size: 20px; font-family:arial;letter-spacing: 2px"> We welcome you to Perigrinus School where we all work together to develop and enhance in our students the capacity to become independent life-long learners and to equip them with the knowlegde, skills and excellence to achieve their goals in life.</p>
				</div>
			</div>
		</div>

		<!-- School Model-->
		<div class="container-fluid padding">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="d-center w-45" src="img/about/book1.jpg">
					<h3 class="head3"> Knowledge </h3>
					<p3 class="trial"> Knowledge is an understanding of an information about a subject that you get in Perigrinus by learning or personal experience. </p3>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="d-center w-45" src="img/about/medal.jpeg">
					<h3 class="head3"> Skills </h3>
					<p3 class="trial"> It takes teamwork in the community to develop better skills for better lives. </p3>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img class="d-center w-45" src="img/about/trophy.jpg">
					<h3 class="head3"> Excellence </h3>
					<p3 class="trial"> Achieving excellence is never easy to do, Perigrinus' helps in building and achieving your excellence. </p3>
				</div>
			</div>
		</div>

		<?php include 'footer.php'; ?>
		<script src="components/design.js"></script>
	</body>
	</html>