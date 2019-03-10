<?php
    include('db.php');

    if(isset($_POST['section'])&&isset($_POST['grade_level'])) {

        $grade_level = $_POST['grade_level'];
        $section = $_POST['section'];

        $result = $db->query("SELECT S.k12_stdnt_info_id, S.person_id, 
                                        S.grade_level_id, S.k12_section_id,
                                        P.fname, P.lname, P.mname
                                FROM k12_student_info as S
                                INNER JOIN person as P
                                ON S.person_id = P.person_id
                                WHERE grade_level_id = $grade_level
                                AND k12_section_id=$section
                                ORDER BY P.lname ASC");

        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><strong><?php echo $row['lname']."</strong>".", ".$row['fname']." ".$row['mname']; ?></td>
            </tr>
            <?php
            
        }
    }

    else if(isset($_POST['grade_level'])) {
        $grade_level = $_POST['grade_level'];
        $result = $db->query("SELECT * FROM k12_sections as K
                                INNER JOIN academic_year as Y
                                    ON K.ay_id = Y.ay_id
                                INNER JOIN grade_levels as G
                                    ON K.grade_level_id = G.grade_level_id
                                WHERE K.grade_level_id = $grade_level
                                AND Y.status = 1");
        ?>
            <option value="0" selected hidden>Section</option>
        <?php

        while($row = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $row['k12_section_id'] ?>">
                    <?php echo "Section - ".$row['section_no'] ?>
                </option>
            <?php
        }
    }
?>

<?php

    /*if(isset($_POST['k12grades'])) {
        $section = $_POST['k12grades'];

        $result = $db->query("SELECT S.k12_stdnt_info_id, S.person_id, 
                                        S.grade_level_id, S.k12_section_id,
                                        P.fname, P.lname, P.mname
                                FROM k12_student_info as S
                                INNER JOIN person as P
                                ON S.person_id = P.person_id
                                WHERE k12_section_id=$section
                                ORDER BY P.lname ASC");

        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['lname'].", ".$row['fname']." ".$row['mname']; ?></td>
                <td>
                    <button class="btn btn-default" data-toggle="modal" data-target="#gr<?php echo $row['lname'] ?>" >Edit Grades</button>
                    
                    <div id="gr<?php echo $row['lname'] ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>
                                        Ayatsuji, Raven Black
                                        <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                                    </h3>
                                </div>
                                <div class="modal-body">
								<form method="POST" action="announce.php"></form>
                                    <label class="col-sm-3" for="an_date">Date</label>
									<input class="col-sm-6" disabled type="text" id="date" value="<?php echo date("Y-m-d H:i:s") ?>">
									<br>
									<label class="col-sm-3" for="an_title">Title</label>
									<input class="col-sm-6" type="text" id="an_title" placeholder="Title">
									<br>
									<label class="col-sm-3" for="an_title">Author</label>
									<input class="col-sm-6" type="text" id="an_title" placeholder="Author">
									<br>
									<label class="col-sm-3" for="an_title">Message</label>
									<input class="col-sm-6" type="text area" id="an_title" placeholder="Type message here">
								</div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info">Add</button>
                                </div>      
                            </div>
                        </div>
                    </div>
                  
                  <!--modal data-backdrop="static">
                    <div id="gr<!?php echo $row['k12_stdnt_info_id']?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>
                                        <!?php echo $row['title'] ?>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </h3>
                                </div>
                                <div class="modal-body">
                                    <h5><strong><!?php echo $row['announcer'] ?></strong></h5>
                                    <h6><i><!?php echo $row['announcer_position'] ?></i></h6>
                                    <br>
                                    <p><strong>Date and Time:</strong> <!?php echo $row['date_start'] ?></p>
                                    <br>
                                    <div class="wrap">
                                        <p><!?php echo $row['content'] ?></p>
                                    </div>
                                </div>
                                <div --class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>      
                            </div>
                        </div>
                    </div-->
                    <!--modal-->
                </td>
            </tr>
            <?php
            
        }
    }*/




?>