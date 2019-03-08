	<div class="container">
				<div id='options'>
					<div class="row">
						<div class="col-sm-6">
							<h4 class='prog'>PROGRAM:</h4>
							<select class='prog-options form-control'>
								<option value='civeng'>Bachelor of Science in Civil Engineering</option>
								<option value='comeng'>Bachelor of Science in Computer Engineering</option>
								<option value='eleceng'>Bachelor of Science in Electrical Engineering</option>
								<option value='elcomeng'>Bachelor of Science in Electronics and Communication Engineering</option>
								<option value='indeng'>Bachelor of Science in Industrial Engineering</option>
								<option value='mecheng'>Bachelor of Science in Mechanical Engineering</option>
							</select>
						</div>
						<div class="col-sm-3">
							<h4 class='prog'>BLOCK:</h4>
							<select class='prog-options form-control'>
								<option value='b1'>Block1</option>
								<option value='b2'>Block2</option>
								<option value='b3'>Block3</option>
								<option value='b4'>Block4</option>
								<option value='b5'>Block5</option>
							</select>
						</div>
						<div class="col-sm-3">
							<h4 class='prog'>SEMESTER:</h4>
							<select class='prog-options form-control'>
								<option value='b1'>First Sem</option>
								<option value='b2'>Second Sem</option>
							</select>
						</div>
					</div>
					<br>
					<label id='syear'><b>SCHOOL YEAR: _____</b></label>
					<label id='sem'><b>SEMESTER:____ </b></label>
				</div>
			</div>
			
			<div class="container-fluid">
				<div id='external-events'>
					<div id='external-events-listing'>
						<p>
							<strong>Course Subjects</strong>
						</p>
						<div class='fc-event CSubjects' data-event='1' data-duration='03:00:00' type="button">CSubject001</div>
						<div class='fc-event CSubjects' type="button">CSubject002</div>
						<div class='fc-event CSubjects' type="button">CSubject003</div>
						<div class='fc-event CSubjects' type="button">CSubject004</div>
						<div class='fc-event CSubjects' type="button">CSubject005</div>
					</div> 
				</div>
				<div class="row">
					<div class="col-sm-12">
						<button class="btn btn-primary d-block mx-auto" data-target="#confirmChanges" data-toggle="modal">Save Changes</button>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div id='calendar-container-stud'>
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
			</div>