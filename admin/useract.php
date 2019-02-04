<?php
include ('connect.php');
include ("session.php");


$action = $_GET["action"];
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
} 
if ($action=="deactivate"){
	$id = $_GET["id"];
	$sql = "UPDATE users SET active=1 WHERE user_id='$id'";
	if (mysqli_query($db, $sql)) {
		$result =  'Accout is DEACTIVATED successfully';
	}
	else {
		$result = 'Error';
	}
}
if ($action=="activate"){
	$id = $_GET["id"];
	$sql = "UPDATE users SET active=0 WHERE user_id='$id'";
	if (mysqli_query($db, $sql)) {
		$result =  'Accout is activated successfully';
	}
	else {
		$result = 'Error';
	}
}
if ($action=="reset"){
	$id = $_GET["id"];
	$pword = "12345";
	$pswrd = password_hash($pword, PASSWORD_DEFAULT);
	$sql = "UPDATE users SET pswrd='$pswrd' WHERE user_id='$id'";
	if (mysqli_query($db, $sql)) {
		$result =  'Password reset successfully';
	}
	else {
		$result = 'Error in resetting password';
	}
}
if ($action=="cp"){
	$trackno = mysqli_real_escape_string($db, $_POST['trackno']);

	$sqla = "SELECT esign FROM users WHERE user_id='$trackno'";
	$querya = mysqli_query($db,$sqla);
	$rowa= mysqli_fetch_array($querya);
	$pic = $rowa['esign'];

	if ($pic == "error"){
		$target_path = "D:/xampp/htdocs/admin/Pictures/"; 
		$target_path = $target_path.basename( $_FILES['fileToUpload']['name']); 
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) { 
			$esign = substr($target_path,22);
		} 
		else{ 
			$esign ="error";
		} 
		$sql= "UPDATE `users` SET `username`='$username',`type`='$type',`esign`='$esign' WHERE user_id= '$trackno'";
		if (mysqli_query($db, $sql)) {
			$result = "Record updated successfully";
		}
		else{
			$result = "Error";
		}
	}
	else{
		if (!unlink($pic)){
			$result= "Error deleting $file".$trackno;
		}
		else{
			$target_path = "D:/xampp/htdocs/admin/Pictures/"; 
			$target_path = $target_path.basename( $_FILES['fileToUpload']['name']); 
			if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) { 
				$esign = substr($target_path,22);
			} 
			else{ 
				$esign ="errormoto";
			} 
			$sql= "UPDATE `users` SET `esign`='$esign' WHERE user_id= '$trackno'";
		}
	}
	if (mysqli_query($db, $sql)) {
		$result = "Record updated successfully";
	}
	else{
		$result = "Error";
	}
}

echo "<script type='text/javascript'>alert('$result');";
echo 'window.location= "usermgmt.php"';
echo '</script>';  
?>