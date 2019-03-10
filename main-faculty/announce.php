<?php
    session_start();
    include('db.php');

        $date = $_POST['an_date'];
        $title = $_POST['an_title'];
        $message = $_POST['an_msg'];
        $message = $_POST['an_msg'];
        $category = $_POST['category'];

        $author = $_SESSION['id'];

        $ayear = $db->query("SELECT * FROM academic_year
                                WHERE status = 1"); 

        if($row = $ayear->fetch_assoc()){
            $pyear = $row['ay_id'];
        }
        
        $sem = $db->query("SELECT * FROM semesters
                                WHERE status = 1"); 

        if($row = $sem->fetch_assoc()){
            $psem = $row['semester_id'];
        }


        $res = $db->query("INSERT INTO announcements (ay_id, semester_id, recipient_category, title, content, date_start, person_id)
                            VALUES ('$pyear', '$psem', '$category', '$title', '$message', '$date', '$author')");

        if($res) {
            echo "OK - ".$title.$message.$date.$author;
            header('announcement.php');
        } else {
            echo "NOT GONNA HAPPEN";
        }




    /*$page = isset($_GET['announcement'])?$_GET['p']:'';
    if($page=='add') {
        $date = $_POST['an_date'];
        $title = $_POST['an_title'];
        $author = $_POST['an_author'];
        $message = $_POST['an_msg'];

        $stmt = $db->prepare("insert into announcements(title, content, date_start, announcer
                                 values('',?,?,?,?)");
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $date_start);
        $stmt->bindParam(4, $announcer);
        if($stmt->execute()) {
            echo "Success";
        } else {
            echo "Fail";
        }

       // $res = $db->query("INSERT INTO announcements(title, content, date_start, announcer)
         //           VALUES ('$title', '$message', '$date', '$author')");

    }   */
?>