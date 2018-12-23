<?php
include("connect.php");

if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
} 
else{
	$table = $_GET['table'];
if($table==46){
	$ay_desc = mysqli_real_escape_string($db, $_POST['ay_desc']);
	$ay_start = mysqli_real_escape_string($db, $_POST['ay_start']);
	$ay_end = mysqli_real_escape_string($db, $_POST['ay_end']);

	$sql = "INSERT INTO `academic_year`( `ay_desc`, `ay_start`, `ay_end`, `right_now`) VALUES ('$ay_desc','$ay_start','$ay_end','0')";
	if (mysqli_query($db, $sql)) {
		$result =  'Record data in table academic_year sucessfully';
	}
	else {
		$result = 'Error';
	}
}
echo "<script type='text/javascript'>alert('$result');";
echo 'window.location= "dbmgmt.php"';
echo '</script>'; 
} 

?>