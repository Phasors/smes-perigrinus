<?php
require_once 'db.php';
$acc->delete_fee('fee_id');
header('location: content.php');
include('header.php');
?>
