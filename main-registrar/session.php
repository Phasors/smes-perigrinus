<?php
    include('db.php');

    if(!isset($_SESSION)){
        session_start();
        $username=$_SESSION['username']; 
    }
    if(!isset($_SESSION['username'])){
        header("Location:logout.php");
    }
    	
?>