<?php
include("connect.php");

if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
} 
else{
	$table = $_GET['table'];
	if($table==46){
		$action = $_GET['action'];
		if($action=="edit"){
			$ay_desc = mysqli_real_escape_string($db, $_POST['ay_desc']);
			$ay_start = mysqli_real_escape_string($db, $_POST['ay_start']);
			$ay_end = mysqli_real_escape_string($db, $_POST['ay_end']);
			$right_now = mysqli_real_escape_string($db, $_POST['right_now']);
			$id = mysqli_real_escape_string($db, $_POST['trackno']);

			$sql = "UPDATE `academic_year` SET `ay_desc`='$ay_desc',`ay_start`='$ay_start',`ay_end`='$ay_end',right_now='$right_now' WHERE `ay_id`= '$id'";

			if (mysqli_query($db, $sql)) {
				$result =  'Update data in table academic_year sucessfully';
			}
			else {
				$result = 'Error';
			}
		}
		else{

		}

	}
	echo "<script type='text/javascript'>alert('$result');";
	echo 'window.location= "dbmgmt.php"';
	echo '</script>'; 
} 

?>