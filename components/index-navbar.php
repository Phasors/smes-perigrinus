<!--Navigation Bar-->
<nav class="navbar navbar-expand-md navbar-light bd-light sticky-top" id="index-navbar"> 
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="img/logo-site.png" class="sample" id="index-navbar-logo"></a>
		<div  id="title-logo">PERIGRINUS SCHOOL</div>			
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="home-student-iapply/admission.php">Students</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Faculty</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home-about/about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="home-services/service.php">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#contact">Contact Us</a>
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
						<form action="login/login_script.php" method="POST">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" name="user" class="form-control" placeholder="Username">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="password" name="pass" class="form-control" placeholder="Password">
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

	<!--------------------
    MODAL CONTACT US 
    --------------------->
    <div class="modal fade" id="contact">
    	<div class="modal-dialog modal-dialog-centered"">
    		<div class="modal-content">
    			<div class="modal-header">
    				<img src="img/logo-site.png" width="80px" height="80px" >
    				<h2 class="modal-title">Contact Us</h2>
    				<button type="button" class="close" data-dismiss="modal">&times;</button>
    			</div>
    			<div class="modal-body">
    				<h3 style="color:white;" class="text-center">Keep in Touch</h3>
    				<div class="col-sm-12 text-center">
    					<i class="fa fa-facebook-official fa-contact"></i>
    					<i class="fa fa-twitter-square fa-contact"></i>
    					<i class="fa fa-instagram fa-contact"></i>
    				</div>
    				<hr>
    				<h3 style="color:white;" class="text-center">Contact</h3>
    				<div class="row">
    					<div class="col-sm-3 offset-md-2 text-center">
    						<span class="label-contact">Phone:</span>
    					</div>
    					<div class="col-sm-3">
    						<span style="color:white;">757-989-5</span>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-sm-3 offset-md-2 text-center">
    						<span class="label-contact">Email:</span>
    					</div>
    					<div class="col-sm-3">
    						<span style="color:white;">smes_perigrinus@gmail.com</span>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
