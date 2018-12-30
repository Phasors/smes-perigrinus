<?php include'components/header.php'; ?>

<?php include'components/back-topbar.php'; ?>
<form id="applicationshs" method="POST" action="../online_Services/collect.php">
<div class="container" style="border: 1px grey solid;padding:10px; margin-top: 2%;">
	<input type="hidden" name="form" value="2">
	<legend>Senior High School Application</legend>
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
				<!-- <label for="exampleFormControlFile1">2x2 Picture</label> -->
				<!-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> -->
				<label data-error="wrong" data-success="right" for="form9" class="label-form9">
					<i class="fa fa-upload"></i>
					<span id="label-span">2x2 Picture</span>
				</label>
				<input type="file" id="form9" name="file" class="form-control validate"> 
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-4">
				<div class="form-group">
					<label for="BDate">Date of Birth:</label>
					<input type="date" id="Bdate" name="Bdate" class="form-control" required="required" autofocus="autofocus" onchange="submitBday()">
				</div>
			</div>
			<div class="col-1">
				<div class="form-group">
					<label for="Age">Age:</label>
					<input type="number" id="age" name="Age" class="form-control" readonly="true" >
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
				<label for="JHS">Junior High School:</label>
				<input type="text" name="JHS" class="form-control" placeholder="Junior High School" required="required" autofocus="autofocus">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="Elem">Elementary School:</label>
				<input type="text" name="Elem" class="form-control" placeholder="Elementary School" required="required" autofocus="autofocus">
			</div>
		</div>
	</div>
	<legend>Track Preference</legend>
	<div class="row">
		<div class="col-8">
			<div class="form-group">
				<label for="choice1">First Choice:</label>
				<input type="text" name="choice1" class="form-control" placeholder="Accounting & Business Management" required="required" autofocus="autofocus"><!-- Dapat dropdown -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<div class="form-group">
				<label for="choice2">Second Choice:</label>
				<input type="text" name="choice2" class="form-control" placeholder="Science, Technology, Engineering & Mathematics" required="required" autofocus="autofocus">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-3 offset-9">
			<input type="submit" name="submit" class="form-control btn btn-success">
		</div>
	</div>
</div>

<script src="design.js"></script>
<script src="../components/design.js"></script>

</body>
</html>	