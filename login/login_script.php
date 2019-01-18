<?php
include_once("../conn.php");
SESSION_START();
$user = $_POST['user'];
$pass = $_POST['pass'];
//$submit = $_POST['submit'];

if($user!=null && $pass!=null){
	
	//Create query
	$qry="SELECT * FROM users WHERE username='$user' AND pswrd='$pass'";
	$result=mysqli_query($conn,$qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['user_id'];
			$_SESSION['username'] = $member['username'];
			$_SESSION['id'] = $member['user_id'];
			$eid = $member['user_id'];
			$position = $member['permissions'];
			$category = $member['category'];
			session_write_close();
			
		/*	if ( $position == "admin"){
				header("location: admin/index.php?eid=".$eid."");
				exit();
			echo "Hello admin ".$id;
			}elseif ($position == "student"){
				
				header("location: ../main-student/index.php");
				exit();
			}
		*/
			
			switch($category){
				
				case 0: echo "<META HTTP-EQUIV='refresh' CONTENT='3;url=../main-student/index.php' >";
						echo "Login Successfully";
				break;
				case 1: header("location: ../main-profeesor/index.php");
				break;
				case 2: header("location: ../main-dean/index.php");
				break;
				case 3: header("location: ../main-chairperson/index.php");
				break;
				case 4: header("location: ../main-guidance/index.php");
				break;
				case 5: header("location: ../main-library/index.php");
				break;
				case 6: header("location: ../main-registrar/index.php");
				break;
				case 7: echo "<META HTTP-EQUIV='refresh' CONTENT='3;url=../main-admission/index.php' >";
						echo "Login Successfully";
				break;
				case 8: header("location: ../main-cashier/index.php");
				break;
				case 9: header("location: ../main-accounting/index.php");
				break;
				
				default;
				
			}
			
		}else {
			
			echo "<META HTTP-EQUIV='refresh' CONTENT='3;url=../index.php' >";
			echo "Login failed!!";
			
			exit();
		}
	}else {
		die("Query failed");
	}
	
}else{
	echo "<META HTTP-EQUIV='refresh' CONTENT='3;url=../index.php' >";
	echo "Fill up the form";
	
}


?>