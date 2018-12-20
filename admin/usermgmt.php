
<html>
<head>
	<!-- automatic logout after 3 minutes-->
	<meta http-equiv="refresh" content="180;url=logout.php" />
	<script src="assets/modal/jquery.min.js"></script>
	<script src="assets/modal/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include("connect.php");
	include("includes.php");
	include('session.php');
	?>
	<div class="contnt">
		<div class="form-group" style="width:50%">
			<form>
				<select class="form-control" name="users" onchange="user(this.value)">
					<option value="0" selected>Please Select Type of User</option>
					<option value="1" >Accounting</option>
					<option value="2">Admin</option>
					<option value="3">Cashier</option>
					<option value="4">Chairperson</option>
					<option value="5">Dean</option>
					<option value="6">Guidance office</option>
					<option value="7">Library</option>
					<option value="8">Professor</option>
					<option value="9">Registrar</option>
					<option value="10">Student</option>
				</select>
			</form>
		</div>

		<div  id="wrapper">
			<div id="show">
				
			</div>
			
		</div>

		<!-- Modal for Add -->
		<div class="modal fade" id="add" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">ADD ACCOUNT</h4>
					</div>
					<div class="modal-body" style="margin: 10px">
						<form action="addacct" method="post">
							<legend> PERSONAL </legend>
							<label for="Name">Name</label>
							<input type="text" name="FName" class="form-control" placeholder="First Name:" required="required" autofocus="autofocus">
							<input type="text" name="MName" class="form-control" placeholder="Middle Name:" required="required" autofocus="autofocus">
							<input type="text" name="LName" class="form-control" placeholder="Last Name:" required="required" autofocus="autofocus">

							<label for="BDate">Date of Birth</label>
							<input type="date" name="BDate" class="form-control" required="required" autofocus="autofocus">

							<label for="email">Email Address</label>
							<input type="email" name="email" class="form-control" placeholder="Email Address" required="required" autofocus="autofocus">

							<label for="contactnum">Contact Number</label>
							<input type="text" name="contactnum" class="form-control" placeholder="Contact Number" required="required" autofocus="autofocus">

							<label for="CStatus">Civil Status</label>
							<input type="text" name="CStatus" class="form-control" placeholder="Civil Status" required="required" autofocus="autofocus">

							<label for="sex">Sex</label>
							<input type="radio" name="sex" value="Male"  required="required" autofocus="autofocus"> Male
							<input type="radio" name="sex" value="Female""  required="required" autofocus="autofocus"> Female <br>

							<label for="RAddress">Residential Address</label>
							<input type="text" name="RHouse" class="form-control" placeholder="House No." required="required" autofocus="autofocus">
							<input type="text" name="RStreet" class="form-control" placeholder="Street" required="required" autofocus="autofocus">
							<input type="text" name="RBS" class="form-control" placeholder="Subd. & Brgy." required="required" autofocus="autofocus">
							<input type="text" name="RMun" class="form-control" placeholder="Municipality/City" required="required" autofocus="autofocus">
							<input type="text" name="RProv" class="form-control" placeholder="Province" required="required" autofocus="autofocus">
							<input type="text" name="RReg" class="form-control" placeholder="Region" required="required" autofocus="autofocus">

							<label for="PAddress">Permanent Address</label>
							<input type="text" name="PHouse" class="form-control" placeholder="House No." required="required" autofocus="autofocus">
							<input type="text" name="PStreet" class="form-control" placeholder="No. & Street" required="required" autofocus="autofocus">
							<input type="text" name="PBS" class="form-control" placeholder="Subd. & Brgy." required="required" autofocus="autofocus">
							<input type="text" name="PMun" class="form-control" placeholder="Municipality/City" required="required" autofocus="autofocus">
							<input type="text" name="PProv" class="form-control" placeholder="Province" required="required" autofocus="autofocus">
							<input type="text" name="PReg" class="form-control" placeholder="Region" required="required" autofocus="autofocus">

							<legend> ACCOUNT </legend>
							<label for="Name">Username</label>
							<input type="text" name="UName" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
							<label for="Name">Category</label>
							<input type="text" name="Category" class="form-control" placeholder="Category" required="required" autofocus="autofocus">
							<label for="Name">Permission</label>
							<input type="text" name="Perm" class="form-control" placeholder="Permission" required="required" autofocus="autofocus">
							<label for="Name">Type</label>
							<input type="text" name="Type" class="form-control" placeholder="Type" required="required" autofocus="autofocus">
							<label for="Name">E Sign</label>
							<input type="text" name="ES" class="form-control" placeholder="ESign" required="required" autofocus="autofocus">
							<label for="Name">ESign Pin</label>
							<input type="text" name="ESP" class="form-control" placeholder="ESign Pin" required="required" autofocus="autofocus">

							<input type="submit" class="btn btn-success" value="Submit">
						</form>
					</div>

				</div>

			</div>
		</div>

		<!-- Modal for Edit -->
		<div class="modal fade" id="edit" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Account</h4>
					</div>
					<div class="modal-body">
						<p>Under Construction</p>
					</div>

				</div>

			</div>
		</div>

		<script>
			function user(str) {
				if (str == "") {
					document.getElementById("show").innerHTML = "";
					return;
				} else { 
					if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        	if (this.readyState == 4 && this.status == 200) {
        		document.getElementById("show").innerHTML = this.responseText;
        		$('#keywords').DataTable( {
        			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        		} );
        	}

        };
        xmlhttp.open("GET","changeuser.php?q="+str,true);
        xmlhttp.send();
    }

}
</script> 
</div>
</body>
</html>



