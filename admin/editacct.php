<?php
include("connect.php");
include("includes.php");
include('session.php');    // check connection

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
} 
else{
  $trackno = mysqli_real_escape_string($db, $_POST['trackno']);
  $username = mysqli_real_escape_string($db, $_POST['UName']);
  $type = mysqli_real_escape_string($db, $_POST['Type']);
  $sql= "UPDATE `users` SET `username`='$username',`type`='$type' WHERE user_id= '$trackno'";  
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