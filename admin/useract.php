<?php
include ('connect.php');

$action = $_GET["action"];
$id = $_GET["id"];
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
} 
if ($action=="deactivate"){
	$sql = "UPDATE users SET active=1 WHERE user_id='$id'";
	if (mysqli_query($db, $sql)) {
		$result =  'Accout is DEACTIVATED successfully';
	}
	else {
		$result = 'Error';
	}
}
if ($action=="activate"){
	$sql = "UPDATE users SET active=0 WHERE user_id='$id'";
	if (mysqli_query($db, $sql)) {
		$result =  'Accout is activated successfully';
	}
	else {
		$result = 'Error';
	}
}
if ($action=="reset"){
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

echo "<script type='text/javascript'>alert('$result');";
echo 'window.location= "usermgmt.php"';
echo '</script>';  
?>