<?php  
 //fetch.php  
require 'db.php';
 if(isset($_POST["c_appli_id"]))  
{
	$id= $_POST["c_appli_id"];
	$query = "SELECT * FROM student_applicants,college_applicants WHERE student_applicants.stdnt_appli_id='$id' AND college_applicants.stdnt_appli_id='$id' ";
	$result1 =mysqli_query($conn,$query);
	$row1 = mysqli_fetch_array($result1);
	echo json_encode($row1);
}
else if(isset($_POST["s_appli_id"]))
{
	$id= $_POST["s_appli_id"];
	$query = "SELECT * FROM student_applicants,shs_applicants WHERE student_applicants.stdnt_appli_id='$id' AND shs_applicants.stdnt_appli_id='$id' ";
	$result1 =mysqli_query($conn,$query);
	$row1 = mysqli_fetch_array($result1);
	echo json_encode($row1);
}


?>
