<?php

$servername="localhost";
$username="root";
$password="";

$conn= mysqli_connect($servername,$username,$password) or die("Connection failed"); 
mysqli_select_db($conn,"smes") or die("No DB found"); 
?>