<?php
    require_once 'db.php';
    if(!(isset($_REQUEST['token'])&&isset($_REQUEST['query']))) die("Unknown Request");
    $token=$_GET['token'];
    $query=$_GET['query'];
    unset($_GET['token']);
    unset($_GET['query']);
    if($token!='160413763d3bdd6f8a451d5d0c62b668559f9c828a0a29609f5e3e495ecfdc70c01f8175c4ff601f95725434db06c077cb812bd112f61c63b35ceec355cf27ba')die("Invalid Key");
    $types="";
    if(isset($_GET['query_types'])){
        $types=$_GET['query_types'];
        unset($_GET['query_types']);
        echo json_encode($db->prepared_query($query,$_GET,$types)->fetch_all(MYSQLI_ASSOC));
    }
    else{
        echo json_encode($db->query($query)->fetch_all(MYSQLI_ASSOC));
    }
?>