<form>
	<div class="card">
		<div class="card-body">
			<h3>PERSONAL INFORMATION</h3>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<label>Name</label>
					<input type="text" name="" class="form-control" disabled>
				</div>
				<div class="col-sm-6">
					<label>Student</label>
					<input type="text" name="" class="form-control" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label>Course</label>
					<input type="text" name="" class="form-control" disabled>
				</div>
				<div class="col-sm-3">
					<label>Curriculum Year</label>
					<input type="text" name="" class="form-control" disabled>
				</div>
				<div class="col-sm-3">
					<label>Year Level</label>
					<input type="text" name="" class="form-control" disabled>
				</div>
			</div>
			<hr>
			<p>Reason for overloading beyond 6 units</p>
			<div class="row">
				<div class="col-sm-12">
					<div class="checkbox">
						<label><input type="checkbox" value=""> Graduating this semester</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="checkbox">
						<label><input type="checkbox" value="">
							Academically outstanding (with GWA of 1.75 in the immediate previous semester, if current semester is 1st then previous semester is 2nd semester and vice versa; summer is not included)
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>

	<div class="card">
		<div class="card-body">
			<h3>ACADEMIC STANDING</h3>
			<hr>
			<h4>Previous Semester</h4>
			<p>If current semester is 1st then previous semester is 2nd and vice versa; summer is not included</p>
			<div class="row">
				<div class="col-sm-1 col"><input type="text" name="" class="form-control"></div>
				<div class="col-sm-10 col">
					<p>units : Number of units enrolled in the previous semester</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col"><input type="text" name="" class="form-control"></div>
				<div class="col-sm-10 col">
					<p>units : Number of units with Passing Grade in the previous semester</p>
				</div>
			</div>

			<br>

			<h4>Current Semester</h4>
			<p>Academic Status(Check your current academic status)</p>
			<div class="row">
				<div class="col-sm-12">
					<label class="radio-inline"><input type="radio" name="optradio" checked>Regular</label>
					<label class="radio-inline"><input type="radio" name="optradio">Regular(Warning)</label>
					<label class="radio-inline"><input type="radio" name="optradio">Warning</label>
					<label class="radio-inline"><input type="radio" name="optradio">Probationary</label>
					<label class="radio-inline"><input type="radio" name="optradio">Dismissed</label>
					<label class="radio-inline"><input type="radio" name="optradio">Disqualified</label>
					<label class="radio-inline"><input type="radio" name="optradio">Returnee</label>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-1 col"><input type="text" name="" class="form-control"></div>
				<div class="col-sm-10 col">
					<p>units : Number of maximum allowed units to enroll based on your Curriculum, Year level and Semester</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col"><input type="text" name="" class="form-control"></div>
				<div class="col-sm-10 col">
					<p>units : Number of units allowed to enroll based on your student account</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col"><input type="text" name="" class="form-control"></div>
				<div class="col-sm-10 col">
					<p>units : Number of units officially enrolled on your student account</p>
				</div>
			</div>
		</div>
	</div>


	<br>


	<div class="card">
		<div class="card-body">
			<h3>OVERLOAD SUBJECT/S</h3>
			<hr>

			<p>Load beyond the maximum number of units allowed</p>

			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Subject Code</th>
							<th>Subject Description</th>
							<th>Crs, Yr & Sec. of the Subject</th>
							<th>No. of Units</th>
							<th>No. of Hours</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" name="" class="form-control"></td>
							<td><input type="text" name="" class="form-control"></td>
							<td><input type="text" name="" class="form-control"></td>
							<td><input type="text" name="" class="form-control"></td>
							<td><input type="text" name="" class="form-control"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</form>