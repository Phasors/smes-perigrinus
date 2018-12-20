<?php
    require_once 'Connection.php';
    const SERVER='localhost';
    const USER='root';
    const PASSWORD='youtube';
    const DATABASE='smes';
    $db=new Connection(SERVER,USER,PASSWORD,DATABASE);
?>