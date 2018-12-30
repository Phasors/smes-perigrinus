<?php 
require_once 'db.php';

$reps='';
if(isset($_POST['submit'])){
	$fname = $_POST["FName"];
	$mname = $_POST["MName"];
	$lname = $_POST["LName"];
	$email = $_POST["email"];
	$strt_name = $_POST["CStreet"];
	$brgy = $_POST["CBS"];
	$mun = $_POST["CMun"];
	$prov = $_POST["CProv"];
	$add = $_POST["CStreet"]." ".$_POST["CBS"]." ".$_POST["CMun"]." ".$_POST["CProv"];
	$dob = $_POST["Bdate"];
	$contact = $_POST["contactnum"];


	$existcheck= mysqli_query($conn,"SELECT * FROM student_applicants WHERE fname='$fname' AND mname='$mname' AND lname='$lname' AND dob='$dob' ");
	if(mysqli_num_rows($existcheck)==0||!$existcheck){

		$sql = "INSERT INTO student_applicants(fname,mname,lname,email,dob,add_strt_name,add_province,add_city,add_barangay,contact_no,status) VALUES ('".$_POST["FName"]."','".$_POST["MName"]."','".$_POST["LName"]."','".$_POST["email"]."','".$_POST["Bdate"]."','$strt_name','$prov','$mun','$brgy','$contact','1')";
		mysqli_query($conn,$sql);
		$applicant_id = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM student_applicants WHERE fname='$fname' AND mname='$mname' AND lname='$lname' AND dob='$dob' "));


		if($_POST["form"]=="1"){
			$SHS = $_POST["SHS"];
			$strand = $_POST["track"];
			$JHS = $_POST["JHS"];
			$pref1 = $_POST["choice1"];
			$pref2 = $_POST["choice2"];
			$pref3 = $_POST["choice3"];
			$college = "college";

			$sql2 = "INSERT INTO college_applicants(stdnt_appli_id,shs_school,shs_track,jhs,pref_course1,pref_course2,pref_course3) VALUES ('$applicant_id[0]','$SHS','$strand','$JHS','$pref1','$pref2','$pref3')";
			mysqli_query($conn,$sql2);
			$reps .= "Application Complete. Please check your email for the application verification. Thank you.";
		}
		else if($_POST["form"]=="2"){
			$jhs = $_POST["JHS"];
			$elem = $_POST["Elem"];
			$t1 = $_POST["choice1"];
			$t2 = $_POST["choice2"];

			$sql2 = "INSERT INTO shs_applicants(stdnt_appli_id,jhs_school,pref_track1,pref_track2) VALUES ('$applicant_id[0]','$jhs','$t1','$t2')";
			mysqli_query($conn,$sql2);
			$reps .= "Application Complete. Please check your email for the application verification. Thank you.";
		}
	}else{
		$reps .= "Applicant already submit an application";
	}
}
// echo $reps;
?>
<?php include'components/header.php'; ?>
<?php include'components/back-topbar.php'; ?>
<div class="container">
	<legend style="padding-top-top: 50%,left:50%"><?php echo $reps; ?></legend>
</div>
</body>
</html>
