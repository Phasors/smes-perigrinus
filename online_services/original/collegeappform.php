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
	
	<div class="container" style="border: 1px grey solid;padding: 10px">
		<legend>Applicant Name:</legend>
		<div class="row">
			<div class="col-3">
				<div class="form-group">
					<label for="FName">First Name:</label>
					<input type="text" name="FName" class="form-control" placeholder="First Name:" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="MName">Middle Name:</label>
					<input type="text" name="MName" class="form-control" placeholder="Middle Name:" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="LName">Last Name:</label>
					<input type="text" name="LName" class="form-control" placeholder="Last Name:" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="exampleFormControlFile1">2x2 Picture</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
					<label for="BDate">Date of Birth:</label>
					<input type="date" name="BDate" class="form-control" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-1">
				<div class="form-group">
					<label for="Age">Age:</label>
					<input type="text" name="Age" class="form-control" readonly="true" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<legend>Address</legend>
		<div class="row">
			<div class="col-3">
				<div class="form-group">
					<label for="CStreet">No. & Street:</label>
					<input type="text" name="CStreet" class="form-control" placeholder="No. & Street" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="CBS">Subd. & Brgy.:</label>
					<input type="text" name="CBS" class="form-control" placeholder="Subd. & Brgy." required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="CMun">Municipality/City:</label>
					<input type="text" name="CMun" class="form-control" placeholder="Municipality/City" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="CProv">Province:</label>
					<input type="text" name="CProv" class="form-control" placeholder="Province" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<legend>Contact</legend>
		<div class="row">
			<div class="col-4">
				<div class="form-group">
					<label for="email">Email Address:</label>
					<input type="email" name="email" class="form-control" placeholder="Email Address" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="contactnum">Contact Number:</label>
					<input type="text" name="contactnum" class="form-control" placeholder="Contact Number" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<legend>Educational Background</legend>
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="SHS">Senior High School:</label>
					<input type="text" name="SHS" class="form-control" placeholder="Senior High School" required="required" autofocus="autofocus">
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					<label for="track">Academic Strand:</label>
					<input type="text" name="track" class="form-control" placeholder="Academic Strand" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="JHS">Junior High School:</label>
					<input type="text" name="JHS" class="form-control" placeholder="Junior High School" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<legend>Program Preference</legend>
		<div class="row">
			<div class="col-8">
				<div class="form-group">
					<label for="choice1">First Choice:</label>
					<input type="text" name="choice1" class="form-control" placeholder="Bachelor of Science in Computer Engineering" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<div class="form-group">
					<label for="choice2">Second Choice:</label>
					<input type="text" name="choice2" class="form-control" placeholder="Bachelor of Science in Computer Engineering" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<div class="form-group">
					<label for="choice3">Third Choice:</label>
					<input type="text" name="choice3" class="form-control" placeholder="Bachelor of Science in Computer Engineering" required="required" autofocus="autofocus">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3 offset-9">
				<input type="submit" name="submit" class="form-control btn btn-success">
			</div>
		</div>
	</div>
</body>
</html>