<?php

    $host= "localhost";
    $dbname = "smes";
    $uname = "root";
    $pw = "";
    
    $db = new mysqli($host, $uname, $pw, $dbname);

if(isset($_GET['page'])){
    $page=$_GET['page'];

    if($page == "view"){

        $result = $db->query("SELECT * FROM announcements");
        //$result = $stmt->execute();
        
        while($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo $row['date_start'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['announcer'] ?></td>
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
                                    <h5><strong><?php echo $row['announcer'] ?></strong></h5>
                                    <h6><i><?php echo $row['announcer_position'] ?></i></h6>
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