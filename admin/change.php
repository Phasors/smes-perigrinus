<?php
include ('connect.php');
include ('adddata.php');
$q = intval($_GET['q']);

if($q==1){
	$sql="SELECT * FROM acad_back_info ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">Primary School</th>
	<th width=""> PS Address</th>
	<th width=""> PS Year</th>
	<th width="">Secondary School</th>
	<th width=""> SS Address</th>
	<th width=""> SS Year</th>
	<th width="">Secondary School 2</th>
	<th width=""> SS2 Address</th>
	<th width=""> SS2 Year</th>
	<th width="">Tertiary School</th>
	<th width=""> TS Address</th>
	<th width=""> TS Year</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['prmry_school'];
		$b=$row['prmry_school_add'];
		$c=$row['prmry_school_sy'];
		$d=$row['scdry_school'];
		$e=$row['scdry_school_add'];
		$f=$row['scdry_school_sy'];
		$g=$row['scdry_school_2'];
		$h=$row['scdry_school_2_add'];
		$i=$row['scdry_school_2_sy'];
		$j=$row['trtry_school'];
		$k=$row['trtry_school_add'];
		$l=$row['trtry_school_sy'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>$j</td>";
		echo "<td>$k</td>";
		echo "<td>$l</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";
	echo"
	<center>
	<button type='button' class='btn btn-success' data-toggle='modal' data-target='#a' style='margin:10px'> Add New Account</button>
	</center>";
}
if($q==2){
	$sql="SELECT * FROM acad_docu ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">stdnt infoid</th>
	<th width="">acaddocu id</th>
	<th width="">receiver</th>
	<th width="">date receive</th>
	<th width="">form</th>
	<th width="">status</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['acad_docu_id'];
		$b=$row['stdnt_info_id'];
		$c=$row['acad_docu_required_id'];
		$d=$row['receiver'];
		$e=$row['date_receive'];
		$f=$row['form'];
		$g=$row['status'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==3){
	$sql="SELECT * FROM  acad_docu_required";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">docu name</th>
	<th width="">docu info</th>
	<th width="">required for</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['acad_docu_required_id'];
		$b=$row['docu_name'];
		$c=$row['docu_info'];
		$d=$row['required_for'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==4){
	$sql="SELECT * FROM accounting_journal ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">person_id</th>
	<th width="">date</th>
	<th width="">accounting title</th>
	<th width="">refference_no</th>
	<th width="">debit</th>
	<th width="">credit</th>
	<th width="">status</th>
	<th width="">payment received by</th>
	<th width="">paid_by</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['accounting_journal_id'];
		$b=$row['person_id'];
		$c=$row['date'];
		$d=$row['accounting_title'];
		$e=$row['refference_no'];
		$f=$row['debit'];
		$g=$row['credit'];
		$h=$row['status'];
		$i=$row['payment_received_by'];
		$j=$row['paid_by'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>$j</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==7){
	$sql="SELECT * FROM  calendar_events";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">title</th>
	<th width="">content</th>
	<th width="">date start</th>
	<th width="">date end</th>
	<th width="">creator</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['title'];
		$b=$row['content'];
		$c=$row['date_start'];
		$d=$row['date_end'];
		$e=$row['creator'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==8){
	$sql="SELECT * FROM cashiering_module ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">person id</th>
	<th width="">curriculum id</th>
	<th width="">program id</th>
	<th width="">semester</th>
	<th width="">official receipt_no</th>
	<th width="">official receipt_date</th>
	<th width="">amount paid</th>
	<th width="">courses paid for</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['transact_no'];
		$b=$row['person_id'];
		$c=$row['curriculum_id'];
		$d=$row['program_id'];
		$e=$row['semester'];
		$f=$row['official_receipt_no'];
		$g=$row['official_receipt_date'];
		$h=$row['amount_paid'];
		$i=$row['courses_paid_for'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==9){
	$sql="SELECT * FROM  colleges";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">college name</th>
	<th width="">date added</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['college_id'];
		$b=$row['college_name'];
		$c=$row['date_added'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==10){
	$sql="SELECT * FROM  college_applicants";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">stdnt appli id</th>
	<th width="">shs school</th>
	<th width="">shs track</th>
	<th width="">jhs</th>
	<th width="">pref course1</th>
	<th width="">pref course2</th>
	<th width="">pref course3</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['stdnt_appli_id'];
		$b=$row['stdnt_appli_id'];
		$c=$row['shs_school'];
		$d=$row['shs_track'];
		$e=$row['jhs'];
		$f=$row['pref_course1'];
		$g=$row['pref_course2'];
		$h=$row['pref_course3'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==11){
	$sql="SELECT * FROM courses ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">program id</th>
	<th width="">curriculum id</th>
	<th width="">course code</th>
	<th width="">equivalent course codes</th>
	<th width="">type</th>
	<th width="">lab unit</th>
	<th width="">lec unit</th>
	<th width="">total unit</th>
	<th width="">hours week</th>
	<th width="">year</th>
	<th width="">semester</th>
	<th width="">prerequisite courses</th>
	<th width="">corequisite courses</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['course_id'];
		$b=$row['program_id'];
		$c=$row['curriculum_id'];
		$d=$row['course_code'];
		$e=$row['equivalent_course_codes'];
		$f=$row['type'];
		$g=$row['lab_unit'];
		$h=$row['lec_unit'];
		$i=$row['total_unit'];
		$j=$row['hours_week'];
		$k=$row['year'];
		$l=$row['semester'];
		$m=$row['prerequisite_courses'];
		$n=$row['corequisite_courses'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>$j</td>";
		echo "<td>$k</td>";
		echo "<td>$l</td>";
		echo "<td>$m</td>";
		echo "<td>$n</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==12){
	$sql="SELECT * FROM course_schedules ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">curriculum id</th>
	<th width="">course id</th>
	<th width="">day</th>
	<th width="">time start</th>
	<th width="">time end</th>
	<th width="">room</th>
	<th width="">category</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['course_schedule_id'];
		$b=$row['curriculum_id'];
		$c=$row['course_id'];
		$d=$row['day'];
		$e=$row['time_start'];
		$f=$row['time_end'];
		$g=$row['room'];
		$h=$row['category'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==13){
	$sql="SELECT * FROM curriculum ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">program id</th>
	<th width="">year added</th>
	<th width="">active</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['curriculum_id'];
		$b=$row['program_id'];
		$c=$row['year_added'];
		$d=$row['active'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==14){
	$sql="SELECT * FROM dept ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">dept id</th>
	<th width="">college id</th>
	<th width="">dept name</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['dept_id'];
		$b=$row['dept_id'];
		$c=$row['college_id'];
		$d=$row['dept_name'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==15){
	$sql="SELECT * FROM faculty ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">person id</th>
	<th width="">dept id</th>
	<th width="">faculty load id</th>
	<th width="">college id</th>
	<th width="">profile pic</th>
	<th width="">age</th>
	<th width="">position</th>
	<th width="">type</th>
	<th width="">status</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['faculty_id'];
		$b=$row['person_id'];
		$c=$row['dept_id'];
		$d=$row['faculty_load_id'];
		$e=$row['college_id'];
		$f=$row['profile_pic'];
		$g=$row['age'];
		$h=$row['position'];
		$i=$row['type'];
		$j=$row['status'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>$j</td>";
		echo "<td>
		<button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button>
		</td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==16){
	$sql="SELECT * FROM faculty_announcements ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">title</th>
	<th width="">content</th>
	<th width="">time</th>
	<th width="">announcer</th>
	<th width="">ay</th>
	<th width="">sem</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['faculty_announcement_id'];
		$b=$row['title'];
		$c=$row['content'];
		$d=$row['time()'];
		$e=$row['announcer'];
		$f=$row['ay'];
		$g=$row['sem'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==17){
	$sql="SELECT * FROM faculty_attendance ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">schedule id</th>
	<th width="">faculty id</th>
	<th width="">date</th>
	<th width="">ay</th>
	<th width="">sem</th>
	<th width="">day</th>
	<th width="">status</th>
	<th width="">reason</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['faculty_attendance_id'];
		$b=$row['schedule_id'];
		$c=$row['faculty_id'];
		$d=$row['date'];
		$e=$row['ay'];
		$f=$row['sem'];
		$g=$row['day'];
		$h=$row['status'];
		$i=$row['reason'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==18){
	$sql="SELECT * FROM faculty_courses ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">faculty id</th>
	<th width="">faculty load id</th>
	<th width="">course schedule id</th>
	<th width="">ay</th>
	<th width="">sem</th>
	<th width="">total units</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['faculty_course'];
		$b=$row['faculty_id'];
		$c=$row['faculty_load_id'];
		$d=$row['course_schedule_id'];
		$e=$row['ay'];
		$f=$row['sem'];
		$g=$row['total_units'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==19){
	$sql="SELECT * FROM faculty_load ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">faculty id</th>
	<th width="">total unit load</th>
	<th width="">unit load taken</th>
	<th width="">unit load avail</th>
	<th width="">year</th>
	<th width="">semester</th>
	<th width="">load encoder</th>
	<th width="">approved</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['faculty_load_id'];
		$b=$row['faculty_id'];
		$c=$row['total_unit_load'];
		$d=$row['unit_load_taken'];
		$e=$row['unit_load_avail'];
		$f=$row['year'];
		$g=$row['semester'];
		$h=$row['load_encoder'];
		$i=$row['approved'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==20){
	$sql="SELECT * FROM faculty_messages ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">faculty_id</th>
	<th width="">sender</th>
	<th width="">receiver</th>
	<th width="">content</th>
	<th width="">time</th>
	<th width="">attachment</th>
	<th width="">deleted</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['faculty_messages_id'];
		$b=$row['faculty_id'];
		$c=$row['sender'];
		$d=$row['receiver'];
		$e=$row['content'];
		$f=$row['time'];
		$g=$row['attachment'];
		$h=$row['deleted'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==21){
	$sql="SELECT * FROM grades ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">course id</th>
	<th width="">course schedule id</th>
	<th width="">faculty id</th>
	<th width="">stdnt info id</th>
	<th width="">schedule id</th>
	<th width="">prlm grade</th>
	<th width="">mdtrm grade</th>
	<th width="">fnl grade</th>
	<th width="">ay</th>
	<th width="">semester</th>
	<th width="">status</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['grades_id'];
		$b=$row['course_id'];
		$c=$row['course_schedule_id'];
		$d=$row['faculty_id'];
		$e=$row['stdnt_info_id'];
		$f=$row['schedule_id'];
		$g=$row['prlm_grade'];
		$h=$row['mdtrm_grade'];
		$i=$row['fnl_grade'];
		$j=$row['ay'];
		$k=$row['semester'];
		$l=$row['status'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>$j</td>";
		echo "<td>$k</td>";
		echo "<td>$l</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==22){
	$sql="SELECT * FROM grad_application ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">stdnt info id</th>
	<th width="">status</th>
	<th width="">form</th>
	<th width="">approved_by</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['application_id'];
		$b=$row['stdnt_info_id'];
		$c=$row['status'];
		$d=$row['form'];
		$e=$row['approved_by'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==23){
	$sql="SELECT * FROM guidance_personnel ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">person id</th>
	<th width="">college id</th>
	<th width="">program id</th>
	<th width="">status</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['guidance_personnel_id'];
		$b=$row['person_id'];
		$c=$row['college_id'];
		$d=$row['program_id'];
		$e=$row['status'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==24){
	$sql="SELECT * FROM librarian ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">person id</th>
	<th width="">college id</th>
	<th width="">status</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['librarian_id'];
		$b=$row['person_id'];
		$c=$row['college_id'];
		$d=$row['status'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==25){
	$sql="SELECT * FROM modules_functions ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">module</th>
	<th width="">function</th>
	<th width="">availability</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['modules_function_id'];
		$b=$row['module'];
		$c=$row['function'];
		$d=$row['availability'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==26){
	$sql="SELECT * FROM payments ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">person id</th>
	<th width="">payment amount</th>
	<th width="">installments</th>
	<th width="">status</th>
	<th width="">date</th>
	<th width="">total</th>
	<th width="">account balance</th>
	<th width="">discount</th>
	<th width="">discounted amount</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['payment_id'];
		$b=$row['person_id'];
		$c=$row['payment_amount'];
		$d=$row['installments'];
		$e=$row['status'];
		$f=$row['date'];
		$g=$row['total'];
		$h=$row['account_balance'];
		$i=$row['discount'];
		$j=$row['discounted_amount'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>$j</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==27){
	$sql="SELECT * FROM person ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">First Name</th>
	<th width="">Middle Name</th>
	<th width="">Last Name</th>
	<th width="">BirthDate</th>
	<th width="">Contact Number</th>
	<th width="">Civil Status</th>
	<th width="">Email</th>
	<th width="">Sex</th>
	<th width="">Residential Address</th>
	<th width="">Permanent Address</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['person_id'];
		$b=$row['fname'];
		$c=$row['mname'];
		$d = $row['lname'];
		$e = $row['birthdate'];
		$f= $row['contact_no'];
		$g= $row['civil_status'];
		$h= $row['email'];
		$i= $row['sex'];
		$j= $row['res_house_no'];
		$k= $row['res_strt_name'];
		$l= $row['res_barangay'];
		$m= $row['res_city'];
		$n= $row['res_province'];
		$o = $row['res_region'];
		$p= $row['perm_house_no'];
		$q= $row['perm_strt_name'];
		$r= $row['perm_barangay'];
		$s= $row['perm_city'];
		$t= $row['perm_province'];
		$u = $row['perm_region'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td>$h</td>";
		echo "<td>$i</td>";
		echo "<td>$j $k $l $m $n $o</td>";
		echo "<td>$p $q $r $s $t $u</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==28){
	$sql="SELECT * FROM portal_features ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">about</th>
	<th width="">event pic1</th>
	<th width="">event pic2</th>
	<th width="">event pic3</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['portal_feature_id'];
		$b=$row['about'];
		$c=$row['event_pic1'];
		$d=$row['event_pic2'];
		$e=$row['event_pic3'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==29){
	$sql="SELECT * FROM prnt_grdn_info ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">name</th>
	<th width="">relation</th>
	<th width="">occupation</th>
	<th width="">contact no</th>
	<th width="">address</th>
	<th width="">status</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['prnt_grdn_info_id'];
		$b=$row['name'];
		$c=$row['relation'];
		$d=$row['occupation'];
		$e=$row['contact_no'];
		$f=$row['address'];
		$g=$row['status'];


		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td>$g</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==30){
	$sql="SELECT * FROM program ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">college id</th>
	<th width="">program name</th>
	<th width="">year added</th>
	<th width="">total years</th>
	<th width="">creator</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$a=$row['program_id'];
		$b=$row['college_id'];
		$c=$row['program_name'];
		$d=$row['year_added'];
		$e=$row['total_years'];
		$f=$row['creator'];

		echo "<tr user_id='$a'>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "<td>$d</td>";
		echo "<td>$e</td>";
		echo "<td>$f</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
if($q==45){
	$sql="SELECT * FROM users ";
	$result = mysqli_query($db,$sql);

	echo '<table  id="keywords" cellspacing="0" cellpadding="0" width="100%">
	<thead>
	<tr>
	<th width="">User ID</th>
	<th width="">User Name</th>
	<th width="">Category</th>
	<th width="">Permissions</th>
	<th width="">Type</th>
	<th width="">Person_ID</th>
	<th width="">Esign</th>
	<th width="">Esign Pin</th>
	<th width="">Active</th>
	<th width=""> Action</th>
	</tr>
	</thead>
	<tbody>';
	while ($row = mysqli_fetch_array($result))
	{
		$trackno=$row['user_id'];
		$username=$row['username'];
		$category=$row['category'];
		$permissions = $row['permissions'];
		$type = $row['type'];
		$person_id= $row['person_id'];
		$esign= $row['esign'];
		$esignpin= $row['esign_pin'];
		$active = $row['active'];

		echo "<tr user_id='$trackno'>";
		echo "<td>$trackno</td>";
		echo "<td>$username</td>";
		echo "<td>$category</td>";
		echo "<td>$permissions</td>";
		echo "<td>$type</td>";
		echo "<td>$person_id</td>";
		echo "<td>$esign</td>";
		echo "<td>$esignpin</td>";
		echo "<td>$active</td>";
		echo "<td> <button type='button' class='btn btn-info' data-toggle='modal' data-target='#edit'  >Edit</button></td>";
		echo "</tr> ";

	}
	echo "</tbody>
	</table>";

}
?>