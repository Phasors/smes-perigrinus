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
					<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg"> See Services </button></a>
				</div>
			</div>
		</div>

		<!--Welcome note-->
		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-4"> Building success together. </h1>				
				</div>
				<hr>
				<div class="col-12">
					<p class="lead" style="font-family:Times new roman"> We welcome you to Perigrinus School where we all work together to develop and enhance in our students the capacity to become independent life-long learners and to equip them with the knowlegde, skills and excellence to achieve their goals in life.</p>
				</div>
			</div>
		</div>

		<?php include 'footer.php'; ?>
		<script src="components/design.js"></script>
	</body>
	</html>