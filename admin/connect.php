<?php
$DB_SERVER='localhost';
$DB_USERNAME= 'root';
$DB_PASSWORD= 'youtube';
$DB_DATABASE='smes';
$db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
mysqli_set_charset($db,"utf8");
?>