<?php
include ('connect.php');
$q = intval($_GET['q']);

$sql="SELECT * FROM users WHERE category= '$q'";
$result = mysqli_query($db,$sql);
echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th width="">Track No.</th>
<th width="">Name</th>
<th width="">User Name</th>
<th width="">Type</th>
<th width="">Esign</th>
<th width="">Actions</th>
</tr>
</thead>
<tbody>';
while ($row = mysqli_fetch_array($result))
{
	$trackno=$row['user_id'];
	$person_id= $row['person_id'];
	$sqla="SELECT `fname`, `mname`, `lname` FROM `person` WHERE person_id= '$person_id'";
	$resulta = mysqli_query($db,$sqla);
	$rowa = mysqli_fetch_array($resulta);
	$fname = $rowa['fname'] ;
	$mname = $rowa['mname'] ;
	$lname = $rowa['lname'] ;
	$name = $fname." ".$mname." ".$lname ;
	$username=$row['username'];
	$ty = $row['type'];
	if( $ty == 0){
		$type="regular";
	}
	elseif($ty == 1){
		$type="admin";
	}
	elseif( $ty == 2){
		$type="assistant";
	}
	elseif($ty == 3){
		$type="super admin";
	}
	else{
		$type="error";
	}
	$esign= $row['esign'];
	$active = $row['active'];

	echo "<tr>";
	echo "<td id='trackno$trackno'>$trackno</td>";
	echo "<td id='name$trackno'>$name</td>";
	echo "<td id='username$trackno'>$username</td>";
	echo "<td id='type$trackno'>$type</td>";
	echo "<td id='esign$trackno' > <img src='$esign' style='width:50px;height:50px;'></td>";
	if($active==0){
		echo "<td class='text-center'>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit' onclick='editAcc(".$trackno.")'  style='width:20%'>Edit</button>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#cp'  onclick='cp(".$trackno.")'style='width:20%'>CP</button>
		<button type='button' class='btn btn-warning' onclick='reset(\"".$name."\",".$trackno.")' style='width:20%'>RP</button>
		<button type='button' class='btn btn-danger' onclick='deactivate(\"".$name."\",".$trackno.")' style='width:20%'>DE</button>";
	} 
	else{
		echo "<td class='text-center'>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit' onclick='editAcc(".$trackno.")' style='width:20%'>Edit</button>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#cp'  style='width:20%'>CP</button>
		<button type='button' class='btn btn-warning' onclick='reset(\"".$name."\",".$trackno.")' style='width:20%'>RP</button>
		<button type='button' class='btn btn-success' onclick='activate(\"".$name."\",".$trackno.")' style='width:20%'>AC</button>";
	}
	echo "</td>";
	echo "</tr> ";
}
echo "</tbody>
</table>";
if (isset($category)){
	echo"
	<center>
	<button type='button' class='btn btn-success' data-toggle='modal' onclick='addAcc(\".$category.\")' data-target='#add' style='margin:10px'> Add New Account</button>
	</center>";
}
else{
	echo"
	<center>
	<button type='button' class='btn btn-success' data-toggle='modal' data-target='#add' style='margin:10px'> Add New Account</button>
	</center>";
}

?>

