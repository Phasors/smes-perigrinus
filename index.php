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

	<!--Navigation Bar-->
	<nav class="navbar navbar-expand-md navbar-light bd-light sticky-top"> 
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="img/logo-site.png" class="logo"></a>
			<div class="welcome">PERIGRINUS SCHOOL</div>			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Faculty</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#login">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--------------------
		MODAL LOGIN 
		--------------------->
		<div class="modal fade" id="login">
			<div class="modal-dialog modal-dialog-centered"">
				<div class="modal-content">
					<div class="modal-header">
						<img src="img/logo-site.png" width="80px" height="80px" >
						<h2 class="modal-title">LOGIN</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row">
								<div class="col-sm-12">
									<input type="text" name="" class="form-control" placeholder="Username">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="password" name="" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="submit" name="" class="btn btn-outline-light d-block mx-auto">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

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
						<button type="button" class="btn btn-outline-light btn-lg"> Apply Now! </button>
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
					<h1 class="display-4"> Bulding success together. </h1>				
				</div>
				<hr>
				<div class="col-12">
					<p class="lead" style="font-family:Times new roman"> We welcome you to Perigrinus School where we all work together to develop and enhance in our students the capacity to become independent life-long learners and to equip them with the knowlegde, skills and excellence to achieve their goals in life.</p>
				</div>
			</div>
		</div>

		<footer class="page-footer font-small blue pt-4">
			<div class="container-fluid text-center text-md-left">
				<div class="row">
					<div class="col-md-6 mt-md-0 mt-3">
						<h3 class="text-uppercase">PERIGRINUS SCHOOL</h3>
						<p>Here you can use rows and columns here to organize your footer content.</p>
					</div>
					<hr class="clearfix w-100 d-md-none pb-3">
					<div class="col-md-3 mb-md-0 mb-3">
						<h5 class="text-uppercase">Links</h5>
						<ul class="list-unstyled">
							<li>
								<a href="#!">About PS</a>
							</li>
							<li>
								<a href="#!">Link 2</a>
							</li>
							<li>
								<a href="#!">Link 3</a>
							</li>
							<li>
								<a href="#!">Link 4</a>
							</li>
						</ul>

					</div>
					<div class="col-md-3 mb-md-0 mb-3">
						<h4>Keep in Touch</h4>
						<i class="fa fa-facebook-official"></i>
						<i class="fa fa-twitter-square"></i>
						<i class="fa fa-instagram"></i>

						<br><br>
						<h4>Contact</h4>
						<p>Phone:</p>
						<p>Email:</p>
					</div>
				</div>
			</div>

			<div class="footer-copyright text-center py-3">
				<span>© 2018 Copyright: Perigrinus School</span>
			</div>
		</footer>

	</body>
	</html>