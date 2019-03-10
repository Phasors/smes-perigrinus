<?php
    include('db.php');

    if(isset($_POST['college'])) {
        $college = $_POST['college'];

        $result = $db->query("SELECT * FROM program
                                WHERE college_id=$college");
        ?>
			<option value="0" selected hidden>Program</option>
        <?php

        while($row = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $row['program_id'] ?>">
                    <?php echo $row['program_name'] ?>
                </option>
            <?php
        }
    }   
    
    if(isset($_POST['program'])) {
        $program = $_POST['program'];

        $result = $db->query("SELECT * FROM block
                                WHERE program_id = 1
                                GROUP BY year");
        ?>
            <option value="0" selected hidden>Year Level</option>
        <?php

        while($row = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $row['year'] ?>">
                    <?php echo "Year - ".$row['year'] ?>
                </option>
            <?php
        }
    }

    if(isset($_POST['year_level'])) {
        $year_level = $_POST['year_level'];

        $result = $db->query("SELECT * FROM block
                                WHERE year = $year_level");
        ?>
            <option value="0" selected hidden>Section</option>
        <?php

        while($row = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $row['section'] ?>">
                    <?php echo "Section - ".$row['section'] ?>
                </option>
            <?php
        }
    }

    if(isset($_POST['section'])&&isset($_POST['col'])
            &&isset($_POST['prog'])&&isset($_POST['year_lvl'])) {
        $section = $_POST['section'];
        $college = $_POST['col'];
        $program = $_POST['prog'];
        $year_level = $_POST['year_lvl'];

        echo $section.$college.$program.$year_level;

        $result = $db->query("SELECT * FROM block as B
                                INNER JOIN block_info as I
                                    ON B.block_id = I.block_id
                                INNER JOIN academic_year as Y
                                    ON I.ay_id = Y.ay_id
                                INNER JOIN col_stdnt_info as C
                                    ON I.col_stdnt_info_id = C.col_stdnt_info_id
                                INNER JOIN person as P
                                    ON C.person_id = P.person_id
                                WHERE Y.ay_status = 1
                                AND B.program_id = $program
                                AND B.year = $year_level
                                AND B.section = $section");
                                
        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><strong><?php echo $row['lname']."</strong>".", ".$row['fname']." ".$row['mname']; ?></td>
            </tr>
            <?php
            
        }
    }
?>