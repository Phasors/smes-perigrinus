
<form action="./request/savepdf.php" method="POST">
	<?php
	include_once('../assets/php/db.php');
	$uid = $_SESSION['id'];

	$user = "SELECT * FROM stdnt_info WHERE person_id='$uid'";
	$quer = mysqli_query($db,$user);
	while($user=mysqli_fetch_array($quer)){
		$program_id = $user['program_id'];
		$stdnt_no =$user['stdnt_no'];
		$yr_lvl= $user['year_level'];

		$program = "SELECT * FROM program WHERE program_id='$program_id'";
		$quers = mysqli_query($db,$program);
		while($prog=mysqli_fetch_array($quers)){
			$col_id = $prog['college_id'];
			$prog_name = $prog['program_name'];
			$prog_code = $prog['program_code'];

			$college = "SELECT * FROM colleges WHERE college_id='$col_id'";
			$querss = mysqli_query($db,$college);
			while($coll=mysqli_fetch_array($querss)){
				$college_name = $coll['college_name'];
				?>

				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
								<label>College/Institute</label>
								<input type="text" name="college-int" style="font-size: 15px" value="<?php echo $college_name;?>" class="form-control" readonly	><br>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<label>Student No.</label>
								<input type="text" name="stud-no" style="font-size: 15px" value="<?php echo $stdnt_no;?>"class="form-control" readonly><br>
							</div>
							<div class="col-sm-4">
								<label>Application Date</label>
								<input type="date" name="app-date" style="font-size: 15px" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
							</div>
						</div>
					<?php }
				} }
				?>
				<?php
				$fls = "SELECT * FROM person WHERE person_id='$uid'";
				$querss = mysqli_query($db,$fls);
				while($us=mysqli_fetch_array($querss)){

					$fname = $us['fname'];
					$mname = $us['mname'];
					$lname = $us['lname'];


					?>
					<div class="row">
						<div class="col-sm-6">
							<label>Name of Student</label>
							<input type="text" style="font-size: 15px" name="stud-name" value="<?php echo $fname."&nbsp;&nbsp;".$mname."&nbsp;&nbsp; ".$lname;?>" class="form-control" readonly><br>
						</div>
					</div>
					<?php 
				}
				?>

				<?php
				$blocksec= "SELECT * FROM block WHERE program_id=$yr_lvl";
				$bquer = mysqli_query($db,$blocksec);
				while($us=mysqli_fetch_array($bquer)){

					$blocks= $us['section'];
				}
				?>

				<div class="row">
					<div class="col-sm-3">
						<label>Course, Yr & Section</label>
						<input type="text" style="font-size: 15px" name="crsyrsc" value="<?php echo $prog_code.", ".$yr_lvl
						."-".$blocks;?>" class="form-control" readonly> <br>
					</div>
					<?php
					$ays= "SELECT * FROM academic_year";
					$quersss = mysqli_query($db,$ays);
					while($us=mysqli_fetch_array($quersss)){

						$ay = $us['ay_desc'];
					}
					?>
					<div class="col-sm-3">
						<label>Academic Year</label>
						<input type="text" style="font-size: 15px" name="acad-yr" value="<?php echo $ay;?>"class="form-control" readonly>
					</div>

					<div class="col-sm-6">
						<div class="card">
							<div class="card-body" style="box-shadow: none !important;">
								<label class="radio-inline"><input type="radio" value="First Sem" name="optradio">First Sem</label>
								<label class="radio-inline"><input type="radio" value="Second Sem" name="optradio">Second Sem</label>
								<label class="radio-inline"><input type="radio" value="Summer" name="optradio">Summer</label>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<label>Reason/s</label>
						<textarea class="form-control" name="reason-box" rows="3"></textarea>
					</div>
				</div>

				<hr>

				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr class="th-font">

								<th>Code</th>
								<th>Description</th>
								<th>Course, Yr & Section</th>
								<th>Day</th>
								<th>Time</th>
								<th>Room</th>
								<th>Units</th>
								<th>Chairperson Signature Over Printed Name and Date</th>
								<th>Tagged By: Signature Over Printed Name and Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="curcode" class="form-control"></td>
								<td><input type="text" name="curdes" class="form-control"></td>
								<td><input type="text" name="curcryrsc" class="form-control"></td>
								<td><input type="text" name="curday" class="form-control"></td>
								<td><input type="text" name="curtime" class="form-control"></td>
								<td><input type="text" name="curroom" class="form-control"></td>
								<td><input type="text" name="curunits" class="form-control"></td>
								<td><input type="text" name="" class="form-control" disabled></td>
								<td><input type="text" name="" class="form-control" disabled></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- card-body -->
			<div class="row">
				<div class="col-sm-12">
					<br>
					<input type="button" href="#" data-toggle="modal" data-target="#save" class="btn-info" value="submit" style="float: right;">
				</div></div>
			</div> <!-- card -->


<!--------------------
		MODAL LOGIN 
		--------------------->
		<div class="modal fade" id="save">
			<div class="modal-dialog modal-dialog-centered"">
				<div class="modal-content">
					<div class="modal-header">
						<img src="img/logo-site.png" width="80px" height="80px" >
						<h2 style="color: #007a81;margin-top: 15px;margin-left: 30px; font-size: 40px;">Perigrinus School</h2>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						
						<div class="row">
							<div class="col-sm-12">
								<label>Request has successfully been made.</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<br>
								<input type="submit" name="submit" value="Save as PDF" class="btn-info" style="float: right;">
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</form>