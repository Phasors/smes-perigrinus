<?php include 'header.php'; ?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			<form>
				<div class="row">
					<div class="col-sm-2 col">
						<select id="year_select" name="cd-dropdown" class="form-control">
							<option value="-1" selected>YEAR</option>
							<option value="1">YEAR 1</option>
							<option value="2">YEAR 2</option>
							<option value="3">YEAR 3</option>
							<option value="4">YEAR 4</option>
						</select>
					</div>
					<div class="col-sm-2 col">
						<select id="grade_select" name="cd-dropdown" class="form-control">
							<option value="-1" selected>SEM</option>
							<option value="1">SEM 1</option>
							<option value="2">SEM 2</option>
						</select>
					</div>
					<div class="col-sm-2 col">
						<select id="grade_select" name="cd-dropdown" class="form-control">
							<option value="-1" selected>SECTION</option>
							<option value="1">SECTION 1</option>
							<option value="2">SECTION 2</option>
							<option value="3">SECTION 3</option>
							<option value="4">SECTION 4</option>
						</select>
					</div>
					<div class="col-sm-4 col-12">
						<select id="subject_select" name="cd-dropdown" class="form-control">
							<option value="-1" selected>SUBJECTS</option>
							<option value="1">SUBJECT 1</option>
							<option value="2">SUBJECT 2</option>
							<option value="3">SUBJECT 3</option>
							<option value="4">SUBJECT 4</option>
						</select>
					</div>



				</div>

				<br>
				<div class="card">
					<div class="card-body">

						<br>
						<div class="table-responsive">
							<table class="table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Midterm</th>
										<th>Final</th>
										<th>Total Grade</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>SURNAME, FIRST NAME, MIDDLE NAME</td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>

									</tr>
									<tr>
										<td>SURNAME, FIRST NAME, MIDDLE NAME</td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
									</tr>
									<tr>
										<td>SURNAME, FIRST NAME, MIDDLE NAME</td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
										<td><input type="text" name="grade" class="form-control form-control-sm"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12">
						<button class="btn btn-primary" style="float:right;">ENCODE GRADES</button>
					</div>
				</div>

			</form>

			<div style="margin-bottom: 150px;"></div>
			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>
