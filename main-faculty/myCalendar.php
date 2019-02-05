<?php include 'header.php'; ?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			
			<div id='options'>
				<div class="container-fluid">
					<div class="col-sm-11 offset-md-1">
						<label id='syear'><b>SCHOOL YEAR: _____</b></label>
						<label id='sem'><b>SEMESTER:____ </b></label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div id='calendar-container' class="mycalendar">
						<div id='calendar'></div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<label class="offset-md-1 col-sm-3">Start Hour</label>
								<div class="col-sm-6">
									<div class="input-group date" id="start-hour" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#start-hour"/>
										<div class="input-group-append" data-target="#start-hour" data-toggle="datetimepicker">
											<div class="input-group-text"><i class="fa fa-clock-o"></i></div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<label class="offset-md-1 col-sm-3">End Hour</label>
								<div class="col-sm-6">
									<div class="input-group date" id="end-hour" data-target-input="nearest">
										<input type="text" class="form-control datetimepicker-input" data-target="#end-hour"/>
										<div class="input-group-append" data-target="#end-hour" data-toggle="datetimepicker">
											<div class="input-group-text"><i class="fa fa-clock-o"></i></div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<label class="offset-md-1 col-sm-3">Assigned Professor</label>
								<div class="col-sm-7">
									<select class="form-control">
										<option selected>PROF</option>
										<option>PROF 1</option>
										<option>PROF 2</option>
										<option>PROF 3</option>
										<option>PROF 4</option>
									</select>
								</div>
							</div>
							<div class="row">
								<label class="offset-md-1 col-sm-3">Assigned Room</label>
								<div class="col-sm-6">
									<select class="form-control">
										<option selected>ROOM</option>
										<option>ROOM 1</option>
										<option>ROOM 2</option>
										<option>ROOM 3</option>
										<option>ROOM 4</option>
									</select>
								</div>
							</div>
							<br>
							<div class="modal-footer">
								<buttton class="btn btn-primary d-block mx-auto">Submit</buttton>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="confirmChanges" role="dialog">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<label>Enter Pincode</label>
							<input type="" name="" class="form-control"><br>
							<div class="modal-footer">
								<buttton class="btn btn-primary d-block mx-auto">Save Changes</buttton>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div style="margin-bottom: 600px;"></div>

			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>
ss