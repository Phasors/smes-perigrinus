    <?php 
    $target_path = "D:/Pictures/"; 
    $target_path = $target_path.basename( $_FILES['fileToUpload']['name']); 
     
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) { 
     echo $target_path; 
    } else{ 
     echo "Sorry, file not uploaded, please try again!"; 
    } 
    ?> 