<?php
include ('connect.php');
include ("session.php");

$picno = $_GET['pic'];

if($picno!=4){
	$sql="SELECT * FROM `portal_features`";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result);
	if ($picno==1){
		$pic= $row['event_pic1'];
	}
	else if($picno==2){
		$pic= $row['event_pic2'];
	}
	else{
		$pic= $row['event_pic3'];
	}


	if (!unlink($pic)){
		$esign ="Pictures/error.jpg";
	}
	else{
		$target_path = "D:/xampp/htdocs/admin/Pictures/"; 
		$target_path = $target_path.basename( $_FILES['fileToUpload']['name']); 
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) { 
			$esign = substr($target_path,22);
		} 
		else{ 
			$esign ="error.jpg";
		} 
		if ($picno==1){
			$sql= "UPDATE `portal_features` SET `event_pic1` = '$esign' WHERE `portal_feature_id` = 1";
		}
		else if($picno==2){
			$sql= "UPDATE `portal_features` SET `event_pic2` = '$esign' WHERE `portal_feature_id` = 1";
		}
		else{
			$sql= "UPDATE `portal_features` SET `event_pic3` = '$esign' WHERE `portal_feature_id` = 1";
		}

	}
	
}
else{
	$about = mysqli_real_escape_string($db, $_POST['about']);
	$sql = "UPDATE `portal_features` SET `about` = '$about' WHERE `portal_feature_id` = 1;";
}
if (mysqli_query($db, $sql)) {
	$result = "Record updated successfully";
}
else{
	$result = "Error";
}
echo "<script type='text/javascript'>alert('$result');";
echo 'window.location= "cms.php"';
echo '</script>';  

?>