<?php
include("connect.php");
include("includes.php");
include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = mysqli_real_escape_string($db, $_POST['FName']);
  $mname = mysqli_real_escape_string($db, $_POST['MName']);
  $lname = mysqli_real_escape_string($db, $_POST['LName']);
  $birthdate = mysqli_real_escape_string($db, $_POST['BDate']);
  $contact_no = mysqli_real_escape_string($db, $_POST['contactnum']);
  $civil_status = mysqli_real_escape_string($db, $_POST['CStatus']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $sex = mysqli_real_escape_string($db, $_POST['sex']);
  $res_house_no = mysqli_real_escape_string($db, $_POST['RHouse']);
  $res_strt_name = mysqli_real_escape_string($db, $_POST['RStreet']);
  $res_province = mysqli_real_escape_string($db, $_POST['RProv']);
  $res_city = mysqli_real_escape_string($db, $_POST['RMun']);
  $res_barangay = mysqli_real_escape_string($db, $_POST['RBS']);
  $res_region = mysqli_real_escape_string($db, $_POST['RReg']);
  $perm_house_no = mysqli_real_escape_string($db, $_POST['PHouse']);
  $perm_strt_name = mysqli_real_escape_string($db, $_POST['PStreet']);
  $perm_province = mysqli_real_escape_string($db, $_POST['PProv']);
  $perm_city = mysqli_real_escape_string($db, $_POST['PMun']);
  $perm_barangay = mysqli_real_escape_string($db, $_POST['PBS']);
  $perm_region = mysqli_real_escape_string($db, $_POST['PReg']);



    // check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  } 
  else{
    $sql = "INSERT INTO `person`( `fname`, `mname`, `lname`, `birthdate`, `contact_no`, `civil_status`, `email`, `sex`, `res_house_no`, `res_strt_name`, `res_province`, `res_city`, `res_barangay`, `res_region`, `perm_house_no`, `perm_strt_name`, `perm_province`, `perm_city`, `perm_barangay`, `perm_region`) 
    VALUES 
    ( '$fname', '$mname','$lname', '$birthdate', '$contact_no', '$civil_status', '$email', '$sex', '$res_house_no', '$res_strt_name', '$res_province', '$res_city', '$res_barangay', '$res_region', '$perm_house_no', '$perm_strt_name', '$perm_province', '$perm_city', '$perm_barangay', '$perm_region') ";
    if (mysqli_query($db, $sql)) {
      $username = mysqli_real_escape_string($db, $_POST['UName']);
      $category = mysqli_real_escape_string($db, $_POST['Category']);
      $permissions = mysqli_real_escape_string($db, $_POST['Perm']);
      $type = mysqli_real_escape_string($db, $_POST['Type']);
      $esign = mysqli_real_escape_string($db, $_POST['ES']);
      $esign_pin = mysqli_real_escape_string($db, $_POST['ESP']);
      $pswrd = '12345';
      $sqla = "SELECT person_id FROM person WHERE fname='$fname' AND mname='$mname' AND lname='$lname' AND contact_no='$contact_no'";
      $querya = mysqli_query($db,$sqla);
      $rowa= mysqli_fetch_array($querya);
      $person_id = $rowa['person_id'];
      $sqlb= "INSERT INTO `users`( `person_id`, `username`, `category`, `permissions`, `type`, `esign`, `esign_pin`,`pswrd`,`active`) 
      VALUES
      ('$person_id', '$username', '$category', '$permissions', '$type', '$esign', '$esign_pin','12345','0')";
      if (mysqli_query($db, $sqlb)) {
        $result = "Record updated successfully";
      }
      else{
        $result = "Error to insert in Accounts";
      }
    }
    else {
      $result = 'Error updating record ';
    }
    echo "<script type='text/javascript'>alert('$result');";
    echo 'window.location= "usermgmt"';
    echo '</script>'; 
  }
}
?>