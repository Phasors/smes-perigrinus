<?php
	session_start();
	session_destroy();

	echo "<META HTTP-EQUIV='refresh' CONTENT='3;url=../index.php' >";
	echo "Successfully Logout";


?>