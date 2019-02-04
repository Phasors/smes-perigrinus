
<?php
include("connect.php");
include("includes.php");
include('session.php');
?>

<div class="contnt">
	<div class="form-group" style="width:50%">
		<form>
			<select class="form-control" id="users" name="users" onchange="user(this.value)">
				<option value="9">Accounting</option>
				<option value="7">Admin</option>
				<option value="8">Cashier</option>
				<option value="3">Chairperson</option>
				<option value="2">Dean</option>
				<option value="4">Guidance office</option>
				<option value="5">Library</option>
				<option value="1">Professor</option>
				<option value="6">Registrar</option>
				<option value="0">Student</option>
				<option value="10">Super Admin</option>
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
					<h2 class="modal-title text-center">ADD ACCOUNT</h2>
				</div>
				<div class="modal-body" style="margin: 10px">
					<form action="addacct.php" method="post" enctype="multipart/form-data">
						<legend> PERSONAL </legend>
						<label for="Name">Name</label>
						<div class="row" >
							<div class="col-sm-4">
								<input type="text" name="FName" class="form-control" placeholder="First Name" required="required" autofocus="autofocus">
							</div>
							<div class="col-sm-4">
								<input type="text" name="MName" class="form-control" placeholder="Middle Name" required="required" autofocus="autofocus">

							</div>
							<div class="col-sm-4">
								<input type="text" name="LName" class="form-control" placeholder="Last Name" required="required" autofocus="autofocus">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label for="CStatus">Civil Status</label>
								<select class="form-control" name="CStatus">
									<option value="Single">Single</option>
									<option value="Married">Married</option>
									<option value="Divorced">Divorced</option>
									<option value="Widowed">Widowed</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="sex">Sex</label> 
								<select class="form-control" name="sex">
									<option value="Female">Female</option>
									<option value="Male">Male</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="BDate">Date of Birth</label>
								<input type="date" name="BDate" class="form-control" required="required" autofocus="autofocus">
							</div>
							<div class="col-sm-3">
								<label for="email">Email Address</label>
								<input type="email" name="email" class="form-control" placeholder="abc@xyz.com" required="required" autofocus="autofocus">
							</div>
							<div class="col-sm-3">
								<label for="contactnum">Contact Number</label>
								<input type="text" name="contactnum" class="form-control" placeholder="09XXXXXXXXX" required="required" autofocus="autofocus">
							</div>
						</div>

						<label for="RAddress">Residential Address</label>
						<div class="row">
							<div class = "col-sm-4">
								<select name = "RReg" class="form-control" id = "reg1">
									<option value = "">Select Region</option>
									<!-- query region selections-->
									<?php
									include('connect.php');
									$sql1 = "SELECT * FROM region ORDER BY reg_name ASC";
									$query1 = mysqli_query($db, $sql1);
									while ($row1 = mysqli_fetch_array($query1)){
										echo '<option value = "'.$row1['reg_id'].'">'.$row1['reg_name'].'</option>';
									}
									echo "</select>";
									?> 
								</select>
							</div>
							<div class = "col-sm-4">
								<select name="RProv" class="form-control" id="prov1">
									<option value="">Select Region first</option>
								</select>
							</div>
							<div class = "col-sm-4">
								<select name="RMun" class="form-control" id="town1">
									<option value="">Select Province first</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class = "col-sm-4">
								<input type="text" name="RHouse" class="form-control" placeholder="House No." required="required" autofocus="autofocus">
							</div>
							<div class = "col-sm-4">
								<input type="text" name="RStreet" class="form-control" placeholder="Street" required="required" autofocus="autofocus">
							</div>
							<div class = "col-sm-4">
								<input type="text" name="RBS" class="form-control" placeholder="Subd. & Brgy." required="required" autofocus="autofocus">
							</div>
						</div>

						<label for="PAddress">Permanent Address</label>
						<div class="row">
							<div class = "col-sm-4">
								<select name = "PReg" class="form-control" id = "reg">
									<option value = "">Select Region</option>
									<!-- query region selections-->
									<?php
									include('connect.php');
									$sql2 = "SELECT * FROM region ORDER BY reg_name ASC";
									$query2 = mysqli_query($db, $sql2);
									while ($row2 = mysqli_fetch_array($query2)){
										echo '<option value = "'.$row2['reg_id'].'">'.$row2['reg_name'].'</option>';
									}
									echo "</select>";
									?> 
								</select>
							</div>
							<div class = "col-sm-4">
								<select name="PProv" class="form-control" id="prov">
									<option value="">Select Region first</option>
								</select>
							</div>
							<div class = "col-sm-4">
								<select name="PMun" class="form-control" id="town">
									<option value="">Select Province first</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class = "col-sm-4">
								<input type="text" name="PHouse" class="form-control" placeholder="House No." required="required" autofocus="autofocus">
							</div>
							<div class = "col-sm-4">
								<input type="text" name="PStreet" class="form-control" placeholder="Street" required="required" autofocus="autofocus">
							</div>
							<div class = "col-sm-4">
								<input type="text" name="PBS" class="form-control" placeholder="Subd. & Brgy." required="required" autofocus="autofocus">
							</div>
						</div>

						<legend> ACCOUNT </legend>
						<div class="row">
							<div class = "col-sm-6">
								<label>Username</label>
								<input type="text" name="UName" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
							</div>
							<div class = "col-sm-6">
								<label>E-Signature</label>
								<input type="file" style="height: 35px" name="fileToUpload"/> 
							</div>
						</div>
						<div class="row">
							<div class = "col-sm-6">
								<label>Category</label>
								<select class="form-control" name="Category" id="addcat">										
									<option value="2">Academic Head</option>
									<option value="9">Accounting</option>
									<option value="7">Admin</option>
									<option value="8">Cashier</option>
									<option value="3">Chairperson</option>
									<option value="4">Guidance Office</option>
									<option value="5">Library</option>
									<option value="1">Professor</option>
									<option value="6">Registrar</option>
									<option value="0">Student</option>
								</select>
							</div>
							<div class = "col-sm-6">
								<label>Type</label>
								<select class="form-control" name="Type">
									<option value="1">Admin</option>
									<option value="2">Assitant</option>
									<option value="0">Regular</option>
									<option value="3">Super Admin</option>
								</select>
							</div>
						</div>
						<legend> Passwords </legend>
						<div class="row">
							<div class="col-sm-6">
								<label>Account Password</label>
								<input type="password" name="password" class="form-control" maxlength="20" minlength="8" required="required" autofocus="autofocus">
							</div>
							<div class="col-sm-3">
								<label>Pin Code</label>
								<input type="password" name="pincode" class="form-control" maxlength="4" required="required" autofocus="autofocus">
							</div>
							<div class="col-sm-3">
								<label>E-Signature Code</label>
								<input type="password" name="esign_pin" class="form-control" maxlength="4" required="required" autofocus="autofocus">
							</div>
						</div>
						<div class="row text-center">
							<input type="submit" class="btn btn-success" style="width:20%" value="Submit">
						</div>
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
				<div class="modal-header" >
					<button type="button" class="close" data-dismiss="modal" >&times;</button>
					<h2 class="modal-title text-center">EDIT ACCOUNT</h2>
				</div>
				<div class="modal-body">
					<form action="editacct.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class = "col-sm-12">
								<label> Name </label>
								<input type="text" id="name" name="name" class="form-control" disabled="disabled">
								<input type="hidden" id="trackno" name="trackno" class="form-control" >
							</div>
						</div>	
						<div class="row">
							<div class = "col-sm-6">
								<label for="Name">Username</label>
								<input type="text" id="username" name="UName" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
							</div>
							<div class = "col-sm-6">
								<label>Type</label>
								<select class="form-control" name="Type" id="type">
									<option value="1" id="1">Admin</option>
									<option value="2" id="2">Assitant</option>
									<option value="0" id="0">Regular</option>
									<option value="3" id="3">Super Admin</option>
								</select>
							</div>
						</div>
						<div class="row text-center">
							<input type="submit" class="btn btn-success" style="width:20%" value="Submit">
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<!-- Modal for Edit -->
	<div class="modal fade" id="cp" role="dialog" >
		<div class="modal-dialog" >

			<!-- Modal content-->
			<div class="modal-content" style="width: 50%; margin: auto">
				<div class="modal-header" >
					<button type="button" class="close" data-dismiss="modal" >&times;</button>
					<h2 class="modal-title text-center">Change E - Signature</h2>
				</div>
				<div class="modal-body">
					<form action="useract.php?action=cp" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class = "col-sm-12">
								<label>Picture</label>
								<input type="file" style="height: 35px" name="fileToUpload"/> 
								<input type="hidden" id="trckno" name="trackno" class="form-control" >
							</div>
						</div>	
						<div class="row text-center">
							<input type="submit" class="btn btn-success" style="width:20%" value="Submit">
						</div>
					</form>
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
function cp(num){
	trckno = document.getElementById("trackno".concat(num)).innerHTML;
	document.getElementById("trckno").value = trckno;
	}
function editAcc(num){
	trackno = document.getElementById("trackno".concat(num)).innerHTML;
	name = document.getElementById("name".concat(num)).innerHTML;
	username = document.getElementById("username".concat(num)).innerHTML;
	type = document.getElementById("type".concat(num)).innerHTML;
	document.getElementById("trackno").value = trackno;
	document.getElementById("name").value = name;
	document.getElementById("username").value = username;
	if (type=='regular'){
		document.getElementById("0").selected = "true";
	}
	else if (type=='admin'){
		document.getElementById("1").selected = "true";
	}
	else if (type=='assitant'){
		document.getElementById("2").selected = "true";
	}
	else if (type=='super admin'){
		document.getElementById("3").selected = "true";
	}
	else{
		//do nothing
	}
	
}
function addAcc(cat){
	document.getElementById("addcat").value = cat;
}
function deactivate(name, trackno){
	if(confirm("Are you sure to deactivate " + name +" account?")){
		window.location = "useract.php?action=deactivate&id=" + trackno;
	}
}
function activate(name, trackno){
	if(confirm("Are you sure to activate " + name +" account?")){
		window.location = "useract.php?action=activate&id=" + trackno;
	}
}
function reset(name, trackno){
	if(confirm("Are you sure to reset the password of  " + name +" account?")){
		window.location = "useract.php?action=reset&id=" + trackno;
	}
}
$(document).ready(function(){
	$('#reg1').on('change',function(){
		var regID1 = $(this).val();
		if(regID1){
			$.ajax({
				type:'POST',
				url:'address.php',
				data:'reg1_id='+regID1,
				success:function(html){
					$('#prov1').html(html);
					$('#town1').html('<option value = "">Select Province first</option>'); 
				}
			}); 
		}else{
			$('#prov1').html('<option value = "">Select Region first</option>');
			$('#town1').html('<option value = "">Select Province first</option>'); 
		}
	});
	$('#prov1').on('change',function(){
		var provID1 = $(this).val();
		if(provID1){
			$.ajax({
				type:'POST',
				url:'address.php',
				data:'prov1_id='+provID1,
				success:function(html){
					$('#town1').html(html);
				}
			}); 
		}else{
			$('#town1').html('<option value = "">Select Province first</option>'); 
		}
	});
	$('#reg').on('change',function(){
		var regID = $(this).val();
		if(regID){
			$.ajax({
				type:'POST',
				url:'address.php',
				data:'reg_id='+regID,
				success:function(html){
					$('#prov').html(html);
					$('#town').html('<option value = "">Select Province first</option>'); 
				}
			}); 
		}else{
			$('#prov').html('<option value = "">Select Region first</option>');
			$('#town').html('<option value = "">Select Province first</option>'); 
		}
	});
	$('#prov').on('change',function(){
		var provID = $(this).val();
		if(provID){
			$.ajax({
				type:'POST',
				url:'address.php',
				data:'prov_id='+provID,
				success:function(html){
					$('#town').html(html);
				}
			}); 
		}else{
			$('#town').html('<option value = "">Select Province first</option>'); 
		}
	});
	window.onload(user("9"));
});
</script> 
</div>
