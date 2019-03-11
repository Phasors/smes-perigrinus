<form>
<?php
include_once('../assets/php/db.php');
$uid = $_SESSION['id'];

$user = "SELECT * FROM stdnt_info WHERE person_id='$uid'";
$quer = mysqli_query($db,$user);
while($user=mysqli_fetch_array($quer)){
	$program_id = $user['program_id'];
	$stdnt_no =$user['stdnt_no'];
	$yr_lvl =$user['year_level'];
$program = "SELECT * FROM program WHERE program_id='$program_id'";
$quers = mysqli_query($db,$program);
while($prog=mysqli_fetch_array($quers)){
	$col_id = $prog['college_id'];
	$prog_name = $prog['program_name'];
	
	$college = "SELECT * FROM colleges WHERE college_id='$col_id'";
$querss = mysqli_query($db,$college);
while($coll=mysqli_fetch_array($querss)){
	$college_name = $coll['college_name'];

	

?>
	<div class="card">
		<div class="card-body">
			<h3>PERSONAL INFORMATION</h3>
			<hr>
			<div class="row">
				<div class="col-sm-6">
				<?php
 $fls = "SELECT * FROM person WHERE person_id='$uid'";
$querss = mysqli_query($db,$fls);
while($us=mysqli_fetch_array($querss)){

	$fname = $us['fname'];
	$mname = $us['mname'];
	$lname = $us['lname'];
 

 ?>
					<label>Name</label>
					<input type="text" style="font-size: 15px" name="" value="<?php echo $fname."&nbsp;&nbsp; ".$mname."&nbsp;&nbsp; ".$lname;?>" class="form-control" disabled> <br>
<?php 
}
?>
				</div>
				<div class="col-sm-6">
					<label>Student No.</label>
					<input type="text" style="font-size: 15px" name="" value="<?php echo $stdnt_no;?>" class="form-control" disabled> <br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
		
					<label>Course</label>
					<input type="text" style="font-size: 15px" name="" value="<?php echo $prog_name;?>" class="form-control" disabled> <br>
				</div>
				<div class="col-sm-3">
				<?php
 $ays= "SELECT * FROM academic_year ";
$quersss = mysqli_query($db,$ays);
while($us=mysqli_fetch_array($quersss)){

	$ay = $us['ay_desc'];
}?>
					<label>Curriculum Year</label>
					<input type="text" style="font-size: 15px" name="" value="<?php echo $ay;?>" class="form-control" disabled><br>
<?php
?>
				</div>
				<div class="col-sm-3">
					<label>Year Level</label>
					<input type="text" style="font-size: 15px" name="" value="<?php echo $yr_lvl;?>"class="form-control" disabled> <br>
				</div>
			</div>
<?php }}} ?>
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
				<div class="row">
				<div class="col-sm-12">
					<br>
					<input type="button" class="btn-info"  href="#" data-toggle="modal" data-target="#sssave" value="submit" style="float: right;">
				</div></div>
	</div>
</form>

<!--------------------
		MODAL LOGIN 
		--------------------->
		<div class="modal fade" id="sssave">
			<div class="modal-dialog modal-dialog-centered"">
				<div class="modal-content">
					<div class="modal-header">
						<img src="img/logo-site.png" width="80px" height="80px" >
						<h2 style="color: #007a81;margin-top: 15px;margin-left: 30px; font-size: 40px;">Perigrinus School</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row">
								<div class="col-sm-12">
									<label>Request has successfully been made.</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<br>
									<input type="button" name="" class="btn-info" value="save" style="float: right;">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>