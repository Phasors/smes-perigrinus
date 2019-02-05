<?php include 'header.php'; ?>

<div class="wrapper">

	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			<div class="container">
				<h3 class="text-center announce-title">NOTIFICATIONS</h3>

				<!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link nav-tabs-cst active" id="nav-personal-tab" data-toggle="pill" href="#incurred" role="tab" aria-controls="pills-incurred" aria-selected="true">INCURRED APPROVAL(S)</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-tabs-cst" id="cleard" data-toggle="pill" href="#cleared" role="tab" aria-controls="pills-cleared" aria-selected="false">CLEARED APPROVAL(S)</a>
					</li>
				</ul>
			-->				<hr>

			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="incurred" role="tabpanel" aria-labelledby="incurred">
					<div class="alert alert-light alert-dismissible fade show">
						<div class="row">
							<div class="col-sm-10">
								<p><b>Your request was already approved</b></p>
								<span>Name:</span><br>
								<span>Department:</span><br>
								<span>Purpose:</span><br>
							</div>
							<div class="col-sm-2">
								<div class="text-center">
									<button class="btn btn-danger approval-remove-view"><i class="fa fa-times"></i></button>
									<button class="btn btn-primary approval-remove-view" data-toggle="modal" data-target="#viewNotif">
										<i class="fa fa-eye"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="alert alert-light alert-dismissible fade show">
						<div class="row">
							<div class="col-sm-10">
								<p><b>Your request was already approved</b></p>
								<span>Name:</span><br>
								<span>Department:</span><br>
								<span>Purpose:</span><br>
							</div>
							<div class="col-sm-2">
								<div class="text-center">
									<button class="btn btn-danger approval-remove-view"><i class="fa fa-times"></i></button>
									<button class="btn btn-primary approval-remove-view" data-toggle="modal" data-target="#viewNotif">
										<i class="fa fa-eye"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- view -->
				<div class="modal fade" id="viewNotif" role="dialog">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<h2>INSERT FORM</h2> 
							</div>
						</div>
					</div>
				</div>


					<!-- <div class="tab-pane fade" id="cleared" role="tabpanel" aria-labelledby="cleared">
						<div class="alert alert-light alert-dismissible fade show">
							<div class="row">
								<div class="col-sm-10">
									<p><b>Your request was already approved</b></p>
									<span>Name:</span><br>
									<span>Department:</span><br>
									<span>Purpose:</span><br>
								</div>
								<div class="col-sm-2">
									<div class="text-center">
										<button class="btn btn-danger approval-remove-view"><i class="fa fa-times"></i></button>
										<button class="btn btn-primary approval-remove-view" style="border-radius: 50%;"><i class="fa fa-eye"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="alert alert-light alert-dismissible fade show">
							<div class="row">
								<div class="col-sm-10">
									<p><b>Your request was already approved</b></p>
									<span>Name:</span><br>
									<span>Department:</span><br>
									<span>Purpose:</span><br>
								</div>
								<div class="col-sm-2">
									<div class="text-center">
										<button class="btn btn-danger approval-remove-view"><i class="fa fa-times"></i></button>
										<button class="btn btn-primary approval-remove-view" style="border-radius: 50%;"><i class="fa fa-eye"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					
				</div>

				
			</div>


			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content -->
</div> <!-- wrapper -->


<?php include 'footer.php'; ?>
