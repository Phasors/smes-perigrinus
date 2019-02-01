<?php
    require_once 'db.php';
	//die(json_encode($_REQUEST));
    if(!(isset($_REQUEST['token'])&&isset($_REQUEST['query']))) die("Unknown Request");
    $token=$_POST['token'];
    $query=$_POST['query'];
    unset($_POST['token']);
    unset($_POST['query']);
    if($token!='160413763d3bdd6f8a451d5d0c62b668559f9c828a0a29609f5e3e495ecfdc70c01f8175c4ff601f95725434db06c077cb812bd112f61c63b35ceec355cf27ba')die("Invalid Key");
    $types="";
    if(isset($_POST['query_types'])){
        $types=$_POST['query_types'];
        unset($_POST['query_types']);
		//die(json_encode($_POST));
        echo json_encode($db->prepared_query($query,$_POST,$types)->fetch_all(MYSQLI_ASSOC));
    }
    else{
        echo json_encode($db->query($query)->fetch_all(MYSQLI_ASSOC));
    }
?>