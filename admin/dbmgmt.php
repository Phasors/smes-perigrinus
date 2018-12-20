<?php
include("connect.php");
include("includes.php");
include('session.php');
?>
<html>
<head>
	<!-- automatic logout after 3 minutes-->
	<meta http-equiv="refresh" content="180;url=logout.php" />
</head>
<body>
	
	<div class="contnt">
		<div class="form-group" style="width:50%">
			<form>
				<select class="form-control" name="users" onchange="change(this.value)">
					<option value="0" selected>Please Select Specific Table</option>
					<option value="1">acad_back_info</option>
					<option value="2">acad_docu</option>
					<option value="3">acad_docu_required</option>
					<option value="4">accounting_journal</option>
					<option value="7">calendar_events</option>
					<option value="8">cashiering_module</option>
					<option value="9">colleges</option>
					<option value="10">college_applicants</option>
					<option value="11">courses</option>
					<option value="12">course_schedules</option>
					<option value="13">curriculum</option>
					<option value="14">dept</option>
					<option value="15">faculty</option>
					<option value="16">faculty_announcements</option>
					<option value="17">faculty_attendance</option>
					<option value="18">faculty_courses</option>
					<option value="19">faculty_load</option>
					<option value="20">faculty_messages</option>
					<option value="21">grades</option>
					<option value="22">grad_application</option>
					<option value="23">guidance_personnel</option>
					<option value="24">librarian</option>
					<option value="25">modules_functions</option>
					<option value="26">payments</option>
					<option value="27">person</option>
					<option value="28">portal_features</option>
					<option value="29">prnt_grdn_info</option>
					<option value="30">program</option>
					<!--<option value="31">program_courses</option>
					<option value="32">program_curriculum</option>
					<option value="33">schedules</option>
					<option value="34">school_evaluation</option>
					<option value="35">semesters</option>
					<option value="36">shs_applicants</option>
					<option value="37">stdnt_info</option>
					<option value="38">stdnt_penalties</option>
					<option value="39">student_announcements</option>
					<option value="40">student_applicants</option>
					<option value="41">student_applicants_docu</option>
					<option value="42">student_attendance</option>
					<option value="43">student_messages</option>
					<option value="44">student_requests</option> -->
					<option value="45">users</option>
				</select>
			</form>
		</div>

		<div  id="wrapper">
			<div id="show">
				
			</div>
			
		</div>
		<script>

			function change(str) {
				if (str == "") {
					document.getElementById("show").innerHTML = "";
					return;
				} else { 
					if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        	if (this.readyState == 4 && this.status == 200) {
        		document.getElementById("show").innerHTML = this.responseText;
        		$('#keywords').DataTable( {
        			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        		} );
        	}
        };
        xmlhttp.open("GET","change.php?q="+str,true);
        xmlhttp.send();
    }
}
</script> 
</div>
</body>
</html>



