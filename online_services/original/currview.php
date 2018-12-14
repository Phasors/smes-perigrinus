<!DOCTYPE html>
<html lang="en">
<head>
	<title>Application for Enrollment</title>
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Custom fonts for this template-->
	<link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"><!-- Page level plugin CSS-->
	<link href="../assets/datatables/dataTables.bootstrap4.css" rel="stylesheet"><!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet"><!-- Bootstrap core JavaScript-->
	<script src="../assets/jquery/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script><!-- Core plugin JavaScript-->
	<script src="../assets/jquery-easing/jquery.easing.min.js"></script><!-- Page level plugin JavaScript-->
	<script src="../assets/chart.js/Chart.min.js"></script><!-- Custom scripts for all pages-->
	<script src="../js/sb-admin.min.js"></script>
</head>
<body>	

	
	<div class="container" style="border: 1px grey solid;padding:10px">
		<legend>Curriculum Appointment</legend>
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
				<legend style="font-size: 20px;padding-top: 10px;font-weight: bold">Pertinent Documents</legend>
				<table class="table">
					<thead>
						<th></th>
						<th>Original</th>
						<th>Photocopy</th>
						<th>Waived</th>
					</thead>
					<tr>
						<td>P.S.A Birth Certificate</td>
						<td><input type="checkbox" name="bc" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="bc" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="bc" class="form-control form-control-sm"></td>
					</tr>
					<tr>
						<td>Good Moral Certificate</td>
						<td><input type="checkbox" name="gmc" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="gmc" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="gmc" class="form-control form-control-sm"></td>
					</tr>
					<tr>
						<td>Form 138B</td>
						<td><input type="checkbox" name="138b" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="138b" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="138b" class="form-control form-control-sm"></td>
					</tr>
					<tr>
						<td>Honorable Dismissal</td>
						<td><input type="checkbox" name="hd" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="hd" class="form-control form-control-sm"></td>
						<td><input type="checkbox" name="hd" class="form-control form-control-sm"></td>
					</tr>
				</table>
			</div>
			<div class="col-6" style="padding: 30px">
				<legend style="font-size: 20px;padding-top: 10px;font-weight: bold">Evaluation</legend>
				<textarea class="form-control"></textarea>
				<span>Evaluated By: Juan Dela Cruz, Guidance Counselor II</span>
			</div>
		</div>

		<div class="row" style="padding-top: 40px">
			<div class="col-8">
				<label for="ProgList">Programs:</label>
				<select name="ProgList" class="form-control">
					<option>Bachelor of Science in Computer Engineering</option>
					<option>Bachelor of Science in Civil Engineering</option>
					<option>Bachelor of Science in Industrial Engineering</option>
				</select>
			</div>
		</div>
		<div class="row">
			<table>
				<thead></thead>
			</table>
		</div>
		<div class="row">
			<div class="offset-10 col-2">
				<input type="submit" name="Submit" class="btn btn-success form-control">
			</div>
		</div>
	</div>
</body>
</html>