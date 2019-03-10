<!--THIS FILE IS FOR THE SERVER SIDE PROCESSING OF ANNOUNCEMENTS-->

<?php
include('db.php');
session_start();
$category = $_SESSION['cat'];

if(isset($_GET['page'])){
    $page=$_GET['page'];

    if($page == "view"){

        //SUBJECT TO CHANGE. LIMIT THE ANNOUNCEMENTS THAT CAN BE VIEWED DEPENDING ON THE
            //session keme and the category/recipient_category!!

        $result = $db->query("SELECT A.announcement_id, A.title, A.content,
                                        A.date_start, A.person_id, F.position,
                                        A.ay_id, A.semester_id, A.recipient_category,
                                        Y.ay_desc, Y.status,
                                        S.semester_name, S.status,
                                        P.lname, P.fname, P.mname, P.suffix
                                FROM announcements as A
                                INNER JOIN academic_year as Y
                                    ON A.ay_id = Y.ay_id
                                INNER JOIN semesters as S
                                    ON A.semester_id = S.semester_id
                                INNER JOIN person as P
                                    ON A.person_id = P.person_id
                                INNER JOIN faculty as F
                                    ON P.person_id = F.person_id
                                WHERE A.recipient_category = $category
                                AND Y.status = 1
                                AND S.status = 1");
        //$result = $stmt->execute();
        
        while($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo $row['date_start'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['lname'].", ".$row['fname'] ?></td>
                <td><?php echo $row['content'] ?></td>
                <td>
                    <button class="btn btn-default" data-toggle="modal" data-target="#dets<?php echo $row['announcement_id'] ?>" >View</button>
                    <!--modal data-backdrop="static"-->
                    <div id="dets<?php echo $row['announcement_id'] ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>
                                        <?php echo $row['title'] ?>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </h3>
                                </div>
                                <div class="modal-body">
                                    <h5><strong><?php echo $row['lname'].", ".$row['fname'] ?></strong></h5>
                                    <h6><i><?php echo $row['position'] ?></i></h6>
                                    <br>
                                    <p><strong>Date and Time:</strong> <?php echo $row['date_start'] ?></p>
                                    <br>
                                    <div class="wrap">
                                        <p><?php echo $row['content'] ?></p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <!--modal-->
                </td>
            </tr>

            <?php
        }
    }
}

?>