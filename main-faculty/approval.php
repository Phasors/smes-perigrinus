<?php include 'header.php'; ?>

<div class="wrapper">

	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			<div class="container">
				<h3 class="text-center announce-title">APPROVALS</h3>

				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link nav-tabs-cst active" id="nav-personal-tab" data-toggle="pill" href="#incurred" role="tab" aria-controls="pills-incurred" aria-selected="true">INCURRED APPROVAL(S)</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-tabs-cst" id="cleard" data-toggle="pill" href="#cleared" role="tab" aria-controls="pills-cleared" aria-selected="false">CLEARED APPROVAL(S)</a>
					</li>
				</ul>
				<hr>

				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="incurred" role="tabpanel" aria-labelledby="incurred">
						<div class="alert alert-light alert-dismissible fade show">
							<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
							<strong>NOPE!</strong> Indicates a successful or positive action.
						</div>
						<div class="alert alert-light alert-dismissible fade show">
							<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
							<strong>NOPE!</strong> Indicates a successful or positive action.
						</div>
					</div>

					<div class="tab-pane fade" id="cleared" role="tabpanel" aria-labelledby="cleared">
						<div class="alert alert-light alert-dismissible fade show">
							<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
							<strong>Success!</strong> Indicates a successful or positive action.
						</div>
						<div class="alert alert-light alert-dismissible fade show">
							<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
							<strong>Success!</strong> Indicates a successful or positive action.
						</div>
					</div>
				</div>

				
			</div>


			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content -->
</div> <!-- wrapper -->


<?php include 'footer.php'; ?>
