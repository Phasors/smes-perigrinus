<?php 
require_once 'db.php';

$postForm = $_POST;
$reps='';
if(isset($_POST)){
	$fname = $_POST["FName"];
	$mname = $_POST["MName"];
	$lname = $_POST["LName"];
	$email = $_POST["email"];
	$add = $_POST["CStreet"]." ".$_POST["CBS"]." ".$_POST["CMun"]." ".$_POST["CProv"];
	$dob = $_POST["Bdate"];


	$existcheck= mysqli_query($conn,"SELECT * FROM student_applicants WHERE fname='$fname' AND mname='$mname' AND lname='$lname'");
	if(mysqli_num_rows($existcheck)==0||!$existcheck){

		$sql = "INSERT INTO student_applicants(fname,mname,lname,email) VALUES ('".$_POST["FName"]."','".$_POST["MName"]."','".$_POST["LName"]."','".$_POST["email"]."')";
		mysqli_query($conn,$sql);

		$applicant_id = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM student_applicants WHERE fname='$fname' AND mname='$mname' AND lname='$lname' "));


	}else{
		$reps .= "Applicant already submit an application";
	}


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


		$reps .= "Application Complete";
	}

}
echo $reps;
// require_once '../dompdf/autoload.inc.php';
// // reference the Dompdf namespace
// use Dompdf\Dompdf;

// // instantiate and use the dompdf class
// $dompdf = new Dompdf();
// $dompdf->loadHtml(file_get_contents('printapplicationform.php'));

// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('letter', 'portrait');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream("Perigrinus-Application-Form.pdf");

?>
