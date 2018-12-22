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

  $sqla = "SELECT esign FROM users WHERE user_id='$trackno'";
  $querya = mysqli_query($db,$sqla);
  $rowa= mysqli_fetch_array($querya);
  $pic = $rowa['esign'];
  if (!unlink($pic)){
    $result= "Error deleting $file";
  }
  else{
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


  echo "<script type='text/javascript'>alert('$result');";
  echo 'window.location= "usermgmt.php"';
  echo '</script>'; 
}
?>