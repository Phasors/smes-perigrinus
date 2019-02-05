<?php include 'header.php'; ?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			<div class="container">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link nav-tabs-cst active" id="nav-prof-tab" data-toggle="pill" href="#nav-prof" role="tab" aria-controls="pills-prof" aria-selected="true">PROFESSOR</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-tabs-cst" id="nav-student-tab" data-toggle="pill" href="#nav-student" role="tab" aria-controls="pills-student" aria-selected="false">STUDENT</a>
					</li>
				</ul>
				<hr>

				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="nav-prof" role="tabpanel" aria-labelledby="nav-prof-tab">
						<?php include 'schedule/prof.php'; ?>
						<div style="margin-bottom: 150px;"></div>
					</div>

					<div class="tab-pane fade" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
						<?php include 'schedule/student.php'; ?>
						<div style="margin-bottom: 150px;"></div>
					</div>

				</div>
			</div>

		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>
