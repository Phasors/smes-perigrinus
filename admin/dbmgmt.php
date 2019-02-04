<?php
include ("include.php");
include ("session.php");
?>
<div class="contnt">
	<div class="form-group" style="width:50%">
		<form>
			<select class="form-control" name="users" onchange="display(this.value)">
				
				<option value="1" selected="selected">academic_year</option>
				<option value="2">acad_back_info</option>
				<option value="3">acad_docu</option>
				<option value="4">acad_docu_required</option>
				<option value="5">accounting_journal</option>
				<option value="45">announcements</option>
				<option value="46">block</option>
				<option value="47">block_info</option>
				<option value="6">calendar_events</option>
				<option value="7">cashiering_module</option>
				<option value="8">colleges</option>
				<option value="9">college_applicants</option>
				<option value="10">courses</option>
				<option value="11">course_schedules</option>
				<option value="12">curriculum</option>
				<option value="13">dept</option>
				<option value="14">faculty</option>
				<!--<option value="15">faculty_announcements</option>-->
				<option value="16">faculty_attendance</option>
				<option value="17">faculty_courses</option>
				<option value="18">faculty_load</option>
				<option value="19">faculty_messages</option>
				<option value="20">grades</option>
				<option value="21">grad_application</option>
				<option value="22">guidance_personnel</option>
				<option value="23">librarian</option>
				<option value="52">misc_fees</option>
				<option value="24">modules_functions</option>
				<option value="25">payments</option>
				<option value="26">person</option>
				<!--<option value="27">portal_features</option>-->
				<option value="28">prnt_grdn_info</option>
				<option value="29">program</option>
				<option value="30">program_courses</option>
				<option value="31">program_curriculum</option>
				<option value="48">province</option>
				<option value="49">region</option>
				<option value="32">schedules</option>
				<option value="33">school_evaluation</option>
				<option value="34">semesters</option>
				<option value="35">shs_applicants</option>
				<option value="53">shs_track_offered</option>
				<option value="54">shs_track_strands</option>
				<option value="36">stdnt_info</option>
				<option value="37">stdnt_penalties</option>
				<!--<option value="38">student_announcements</option>-->
				<option value="39">student_applicants</option>
				<option value="40">student_applicants_docu</option>
				<option value="41">student_attendance</option>
				<option value="50">student_load</option>
				<option value="42">student_messages</option>
				<option value="43">student_requests</option>
				<option value="51">town</option>
				<!--<option value="44">users</option> -->
			</select>
		</form>
	</div>
	<div class="pageContainer">
	</div>
	<script type="text/javascript" >
		$(document).ready(
			display('1')
		);

		
		function display(page){
			$(".pageContainer").load("change.php?table="+page);
		}
	</script>
