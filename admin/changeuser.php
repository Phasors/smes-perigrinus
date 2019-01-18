<?php
include ('connect.php');
$q = intval($_GET['q']);

if($q==1){
	$sql="SELECT * FROM users WHERE category=9";
	$result = mysqli_query($db,$sql);
}
if($q==2){
	$sql="SELECT * FROM users WHERE category=7";
	$result = mysqli_query($db,$sql);
}
if($q==3){
	$sql="SELECT * FROM users WHERE category=8";
	$result = mysqli_query($db,$sql);
}
if($q==4){
	$sql="SELECT * FROM users WHERE category=3";
	$result = mysqli_query($db,$sql);
}
if($q==5){
	$sql="SELECT * FROM users WHERE category=2";
	$result = mysqli_query($db,$sql);
}
if($q==6){
	$sql="SELECT * FROM users WHERE category=4";
	$result = mysqli_query($db,$sql);
}
if($q==7){
	$sql="SELECT * FROM users WHERE category=5";
	$result = mysqli_query($db,$sql);
}
if($q==8){
	$sql="SELECT * FROM users WHERE category=1";
	$result = mysqli_query($db,$sql);
}
if($q==9){
	$sql="SELECT * FROM users WHERE category=6";
	$result = mysqli_query($db,$sql);
}
if($q==10){
	$sql="SELECT * FROM users WHERE category=0";
	$result = mysqli_query($db,$sql);
}
echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th width="">User ID</th>
<th width="">User Name</th>
<th width="">Category</th>
<th width="">Permissions</th>
<th width="">Type</th>
<th width="">Person_ID</th>
<th width="">Esign</th>
<th width="">Esign Pin</th>
<th width="">Active</th>
<th width="">Actions</th>
</tr>
</thead>
<tbody>';
while ($row = mysqli_fetch_array($result))
{
	$trackno=$row['user_id'];
	$username=$row['username'];
	$category=$row['category'];
	$permissions = $row['permissions'];
	$type = $row['type'];
	$person_id= $row['person_id'];
	$esign= $row['esign'];
	$esignpin= $row['esign_pin'];
	$active = $row['active'];

	echo "<tr user_id='$trackno'>";
	echo "<td>$trackno</td>";
	echo "<td>$username</td>";
	echo "<td>$category</td>";
	echo "<td>$permissions</td>";
	echo "<td>$type</td>";
	echo "<td>$person_id</td>";
	echo "<td>$esign</td>";
	echo "<td>$esignpin</td>";
	echo "<td>$active</td>";
	echo "<td>
	<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit' style='width:48%'>Edit</button>
	<button type='button' class='btn btn-info' style='width:48%'>RP</button>
	</td>";
	echo "</tr> ";

}
echo "</tbody>
</table>";
echo"
<center>
				<button type='button' class='btn btn-success' data-toggle='modal' data-target='#add' style='margin:10px'> Add New Account</button>
			</center>";
?>

