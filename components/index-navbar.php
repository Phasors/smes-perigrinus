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
						<a class="nav-link" href="#">Students</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Faculty</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
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
