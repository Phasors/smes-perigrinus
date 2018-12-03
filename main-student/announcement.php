<?php include 'header.php'; ?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			
			<div class="container">
				<h3 class="text-center announce-title">ANNOUNCEMENTS</h3>
				<div class="card card-default">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th width="20%">Date</th>
										<th width="30%">Title</th>
										<th width="20%">Author</th>
										<th width="30%">Message</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>December 3, 2018</td>
										<td>Event</td>
										<td>Author</td>
										<td>Event Details</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>


