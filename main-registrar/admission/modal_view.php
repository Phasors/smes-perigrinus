<div class="modal fade" id="view_college_app" tabindex="-1" role="dialog" aria-labelledby="Update" aria-hidden="true">
	<div class="modal-dialog" style="min-width: 1250px" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row" style="padding-bottom: 20px">
						<div class="col">
							<legend>Application Evaluation</legend>
						</div>
						<div class="col-2">
							<input type="submit" name="Submit" class="btn btn-success form-control">
						</div>
						<div class="col-2">
							<input type="button" name="Decline" class="btn btn-danger form-control" value="Decline">
						</div>
					</div>
					<div class="row">
						<div class="col-2 align-self-end">
							<div class="form-group">
								<label for="appnum">Application No.:</label>
								<input type="text" name="appnum" class="form-control" placeholder="Application No.:" required="required" autofocus="autofocus">
							</div>
						</div>
						<div class="col-4 align-self-end">
							<div class="form-group">
								<label for="ApplicantName">Name of Applicant:</label>
								<input type="text" name="ApplicantName" class="form-control" placeholder="Name of Applicant:" required="required" autofocus="autofocus">
							</div>
						</div>
						<div class="col-4 offset-2">
							<img src="{{asset('vendor/img/geek.png')}}" style="width: 200px;height: 200px">
						</div>
					</div>
					<div class="row">
						<div class="col-2">
							<label for="appExDate">Examination Date:</label>
							<input type="Date" name="appExDate" class="form-control" required="required" autofocus="autofocus">
						</div>
						<div class="col-2">
							<label for="appExScore">Examination Score:</label>
							<input type="text" name="appExScore" class="form-control" placeholder="Score:" required="required" autofocus="autofocus">
						</div>
						<div class="offset-4 col-2">
							<label for="Status">Enrollee Status:</label>
							<input type="text" name="enStatus" class="form-control" placeholder="Enrollee Status" required="required" autofocus="autofocus">
						</div>
					</div>

					<div class="row">
						<div class="col-6" style="padding: 30px">
							<legend >Pertinent Documents</legend>
							<table class="table">
								<thead>
									<th></th>
									<th>Original</th>
									<th>Photocopy</th>
									<th>Waived</th>
								</thead>
								<tr>
									<td>P.S.A Birth Certificate</td>
									<td><input type="radio" name="bc" class="form-control"></td>
									<td><input type="radio" name="bc" class="form-control"></td>
									<td><input type="radio" name="bc" class="form-control"></td>
								</tr>
								<tr>
									<td>Good Moral Certificate</td>
									<td><input type="radio" name="gmc" class="form-control"></td>
									<td><input type="radio" name="gmc" class="form-control"></td>
									<td><input type="radio" name="gmc" class="form-control"></td>
								</tr>
								<tr>
									<td>Form 138B</td>
									<td><input type="radio" name="138b" class="form-control"></td>
									<td><input type="radio" name="138b" class="form-control"></td>
									<td><input type="radio" name="138b" class="form-control"></td>
								</tr>
								<tr>
									<td>Honorable Dismissal</td>
									<td><input type="radio" name="hd" class="form-control"></td>
									<td><input type="radio" name="hd" class="form-control"></td>
									<td><input type="radio" name="hd" class="form-control"></td>
								</tr>
							</table>
						</div>
						<div class="col-6" style="padding: 30px">
							<div class="row">
								<legend >Evaluation</legend>
								<textarea class="form-control"></textarea>
								<span>Evaluated By: Juan Dela Cruz, Guidance Counselor II</span>
							</div>
							<div class="row" style="padding-top: 40px">
								<legend for="ProgList">Program:</legend>
								<select name="ProgList" class="form-control">
									<option>Bachelor of Science in Computer Engineering</option>
									<option>Bachelor of Science in Civil Engineering</option>
									<option>Bachelor of Science in Industrial Engineering</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<table>
							<thead></thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="view_shs_app" tabindex="-1" role="dialog" aria-labelledby="Update" aria-hidden="true">
	<div class="modal-dialog" style="min-width: 1250px" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row" style="padding-bottom: 20px">
						<div class="col">
							<legend>Application Evaluation</legend>
						</div>
						<div class="col-2">
							<input type="submit" name="Submit" class="btn btn-success form-control">
						</div>
						<div class="col-2">
							<input type="button" name="Decline" class="btn btn-danger form-control" value="Decline">
						</div>
					</div>
					<div class="row">
						<div class="col-2 align-self-end">
							<div class="form-group">
								<label for="appnum">Application No.:</label>
								<input type="text" name="s_appnum" class="form-control" placeholder="Application No.:" required="required" autofocus="autofocus">
							</div>
						</div>
						<div class="col-4 align-self-end">
							<div class="form-group">
								<label for="ApplicantName">Name of Applicant:</label>
								<input type="text" name="s_ApplicantName" class="form-control" placeholder="Name of Applicant:" required="required" autofocus="autofocus">
							</div>
						</div>
						<div class="col-4 offset-2">
							<img src="{{asset('vendor/img/geek.png')}}" style="width: 200px;height: 200px">
						</div>
					</div>
					<div class="row">
						<div class="col-2">
							<label for="appExDate">Examination Date:</label>
							<input type="Date" name="appExDate" class="form-control" required="required" autofocus="autofocus">
						</div>
						<div class="col-2">
							<label for="appExScore">Examination Score:</label>
							<input type="text" name="appExScore" class="form-control" placeholder="Score:" required="required" autofocus="autofocus">
						</div>
						<div class="offset-4 col-2">
							<label for="Status">Enrollee Status:</label>
							<input type="text" name="enStatus" class="form-control" placeholder="Enrollee Status" required="required" autofocus="autofocus">
						</div>
					</div>

					<div class="row">
						<div class="col-6" style="padding: 30px">
							<legend >Pertinent Documents</legend>
							<table class="table">
								<thead>
									<th></th>
									<th>Original</th>
									<th>Photocopy</th>
									<th>Waived</th>
								</thead>
								<tr>
									<td>P.S.A Birth Certificate</td>
									<td><input type="radio" name="bc" class="form-control"></td>
									<td><input type="radio" name="bc" class="form-control"></td>
									<td><input type="radio" name="bc" class="form-control"></td>
								</tr>
								<tr>
									<td>Good Moral Certificate</td>
									<td><input type="radio" name="gmc" class="form-control"></td>
									<td><input type="radio" name="gmc" class="form-control"></td>
									<td><input type="radio" name="gmc" class="form-control"></td>
								</tr>
								<tr>
									<td>Form 138B</td>
									<td><input type="radio" name="138b" class="form-control"></td>
									<td><input type="radio" name="138b" class="form-control"></td>
									<td><input type="radio" name="138b" class="form-control"></td>
								</tr>
								<tr>
									<td>Transeferring Materials</td>
									<td><input type="radio" name="hd" class="form-control"></td>
									<td><input type="radio" name="hd" class="form-control"></td>
									<td><input type="radio" name="hd" class="form-control"></td>
								</tr>
							</table>
						</div>
						<div class="col-6" style="padding: 30px">
							<div class="row">
								<legend >Evaluation</legend>
								<textarea class="form-control"></textarea>
								<span>Evaluated By: Juan Dela Cruz, Guidance Counselor II</span>
							</div>
							<div class="row" style="padding-top: 40px">
								<legend for="TrackList">Track:</legend>
								<select name="TrackList" class="form-control">
									<option>Bachelor of Science in Computer Engineering</option>
									<option>Bachelor of Science in Civil Engineering</option>
									<option>Bachelor of Science in Industrial Engineering</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>