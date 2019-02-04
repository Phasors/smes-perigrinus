<?php
include ('connect.php');
include ("session.php");

$prov1 = $_SESSION["prov1"];
$town1 = $_SESSION["town1"];
if(!empty($_POST["reg1_id"])){
    //Fetch all Region data
    $sql="SELECT * FROM province WHERE reg_id = ".$_POST['reg1_id']." ORDER BY prov_name ASC";
    $result = mysqli_query($db,$sql);
    //Count total number of rows
    $rowCount = mysqli_num_rows($result);
    //Province option list
    if($rowCount > 0){
        echo '<option value="0">Select Province</option>';
        while($row = mysqli_fetch_array($result)){
			echo "<option value = '".$row['prov_id']."'".$select_attribute.">".$row['prov_name']."</option>";			
        }
    }else{
        echo '<option value="0">Province not available</option>';
    }
}elseif(!empty($_POST["prov1_id"])){
    //Fetch all Town data
    $sqla="SELECT * FROM `town` WHERE prov_id = ".$_POST['prov1_id']." ORDER BY town_name ASC";
    $resulta = mysqli_query($db,$sqla);
    //Count total number of rows
    $rowCount = mysqli_num_rows($resulta);
    //Town option list
    if($rowCount > 0){
        echo '<option value="0">Select Town</option>';
        while($rowa = mysqli_fetch_array($resulta)){ 
			echo "<option value = '".$rowa['town_id']."'>".$rowa['town_name']."</option>";	
        }
    }else{
        echo '<option value="0">Town not available</option>';
    }
}

$prov = $_SESSION["prov"];
$town = $_SESSION["town"];
if(!empty($_POST["reg_id"])){
    //Fetch all Region data
    $sql="SELECT * FROM province WHERE reg_id = ".$_POST['reg_id']." ORDER BY prov_name ASC";
    $result = mysqli_query($db,$sql);
    //Count total number of rows
    $rowCount = mysqli_num_rows($result);
    //Province option list
    if($rowCount > 0){
        echo '<option value="0">Select Province</option>';
        while($row = mysqli_fetch_array($result)){
            echo "<option value = '".$row['prov_id']."'".$select_attribute.">".$row['prov_name']."</option>";           
        }
    }else{
        echo '<option value="0">Province not available</option>';
    }
}elseif(!empty($_POST["prov_id"])){
    //Fetch all Town data
    $sqla="SELECT * FROM `town` WHERE prov_id = ".$_POST['prov_id']." ORDER BY town_name ASC";
    $resulta = mysqli_query($db,$sqla);
    //Count total number of rows
    $rowCount = mysqli_num_rows($resulta);
    //Town option list
    if($rowCount > 0){
        echo '<option value="0">Select Town</option>';
        while($rowa = mysqli_fetch_array($resulta)){ 
            echo "<option value = '".$rowa['town_id']."'>".$rowa['town_name']."</option>";  
        }
    }else{
        echo '<option value="0">Town not available</option>';
    }
}
?>