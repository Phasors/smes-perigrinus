<?php include 'header.php'; ?>
<?php
function college_applicants($conn){
	$output = '';
	$sql = "SELECT * FROM student_applicants,college_applicants WHERE student_applicants.stdnt_appli_id=college_applicants.stdnt_appli_id";
	$result = mysqli_query($conn,$sql);
	while($row= mysqli_fetch_array($result)){
		$output .= '<tr>';
		$output .= '<td><input type="checkbox" name="checkAll" class="checkSingle" value="'.$row["stdnt_appli_id"].'"></td>';
		$output .= '<td>'.$row["stdnt_appli_id"].'</td>';
		$output .= '<td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>';
		$output .= '<td><a><span class="view_appli" data-index="'.$row["stdnt_appli_id"].'" data-target="#view_college_app" data-toggle="modal"><button class="btn btn-small btn-warning"><i class="fa fa-eye"></i></button></span></a></td>';
		$output .= '</tr>';
	}
	return $output;
}
function shs_applicants($conn){
	$output = '';
	$sql = "SELECT * FROM student_applicants,shs_applicants WHERE student_applicants.stdnt_appli_id=shs_applicants.stdnt_appli_id";
	$result = mysqli_query($conn,$sql);
	while($row= mysqli_fetch_array($result)){
		$output .= '<tr>';
		$output .= '<td><input type="checkbox" name="checkAll" class="checkSingle" value="'.$row["stdnt_appli_id"].'"></td>';
		$output .= '<td>'.$row["stdnt_appli_id"].'</td>';
		$output .= '<td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>';
		$output .= '<td><a><span class="view_appli_shs" data-index="'.$row["stdnt_appli_id"].'" data-target="#view_shs_app" data-toggle="modal"><button class="btn btn-small btn-warning"><i class="fa fa-eye"></i></button></span></a></td>';
		$output .= '</tr>';
	}
	return $output;
}
?>
<div id="content-body">
	<div class="container" style="margin-top: 5%;">
		<div class="center">
			<span class="welcome"> ADMISSION</span>
			<span class="prof-name">Evaluation</span>
		</div>
		<hr>
	</div>
	<div class="row">
		<div class="col">
			<nav>
				<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">College</a>
					<a class="nav-item nav-link" id="nav-shs-tab" data-toggle="tab" href="#nav-shs" role="tab" aria-controls="nav-shs" aria-selected="false">Senior High</a>
					<a class="nav-item nav-link" id="nav-jhs-tab" data-toggle="tab" href="#nav-jhs" role="tab" aria-controls="nav-jhs" aria-selected="false">Junior High</a>
					<a class="nav-item nav-link" id="nav-elem-tab" data-toggle="tab" href="#nav-elem" role="tab" aria-controls="nav-elem" aria-selected="false">Elementary</a>
				</div>
			</nav>
			<?php include 'admission/evaluation.php' ?>
		</div>
	</div>
</div>

<?php include 'admission/modal_view.php' ?>

<?php include 'footer.php';?>