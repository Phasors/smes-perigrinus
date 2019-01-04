<?php include 'header.php'; ?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			
			<div id='options'>
				<div class="container-fluid">
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
						<div class="col-sm-6">
							<h4 class='prog'>BLOCK:</h4>
							<select class='prog-options form-control'>
								<option value='b1'>Block1</option>
								<option value='b2'>Block2</option>
								<option value='b3'>Block3</option>
								<option value='b4'>Block4</option>
								<option value='b5'>Block5</option>
							</select>
						</div>
					</div>
					<br>
					<label id='syear'><b>SCHOOL YEAR: _____</b></label>
					<label id='sem'><b>SEMESTER:____ </b></label>
				</div>
			</div>

			<div id='external-events'>
				<div id='external-events-listing'>
					<p>
						<strong>Course Subjects</strong>
					</p>
					<div class='fc-event' data-event='1' maxTime='5:00:00'>CSubject001</div>
					<div class='fc-event'>CSubject002</div>
					<div class='fc-event'>CSubject003</div>
					<div class='fc-event'>CSubject004</div>
					<div class='fc-event'>CSubject005</div>
				</div> 
				<p>
					<input type='checkbox' id='drop-remove' checked='checked' />
					<label for='drop-remove'>remove after drop</label>
				</p>
			</div>

			<div id='calendar-container'>
				<div id='calendar'></div>
			</div>
			
			<div style="margin-bottom: 750px;"></div>

			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>
