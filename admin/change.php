<?php

include ("session.php");
$q = $_GET["table"];
$value = array("","academic_year", "acad_back_info", "acad_docu","acad_docu_required","accounting_journal","calendar_events","cashiering_module","colleges","college_applicants","courses","course_schedules","curriculum","dept","faculty","","faculty_attendance","faculty_courses","faculty_load","faculty_messages","grades","grad_application","guidance_personnel","librarian","modules_functions","payments","person","portal_features","prnt_grdn_info","program","program_courses","program_curriculum","schedules","school_evaluation","semesters","shs_applicants","stdnt_info","stdnt_penalties","student_announcements","student_applicants","student_applicants_docu","student_attendance","student_messages","student_requests","users","announcements","block","block_info","province","region","student_load","town","misc_fees","shs_track_offered","shs_track_strands");
$table = $value[$q];
	// $table = "person"
?>
<div style="padding:10px; margin: 10px;">
	<table id="example" width="100%" >
		<thead>
			<tr>
				<th></th>
				<?php 
				include_once("connect.php");
				$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$table."' AND TABLE_SCHEMA = 'smes' ";
				$result = mysqli_query($db,$sql);
				$post = array();
				while($row = mysqli_fetch_assoc($result))
				{
					$post[] = $row;
				}
						//array_shift($post);
				foreach ($post as $row) 
				{ 
					foreach ($row as $element)
					{
						echo "<th>".$element."</th>";
					}
				}
				?>
			</tr>
		</thead>
	</table>
</div>
<script type="text/javascript" language="javascript" class="init">
		var editor; // use a global for the submit and return data rendering in the examples

		$(document).ready(function() {
			editor = new $.fn.dataTable.Editor( {
				ajax: "db/controllers/<?php echo $table?>.php",
				table: "#example",
				fields: [
				
				<?php 
				include_once("connect.php");
				$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$table."' AND TABLE_SCHEMA = 'smes' ";
				$result = mysqli_query($db,$sql);
				$post = array();
				while($row = mysqli_fetch_assoc($result))
				{
					$post[] = $row;
				}
				array_shift($post);
				foreach ($post as $row) 
				{ 
					foreach ($row as $element)
					{
						echo "{ label: '".$element."' ,";
						echo " name: '".$element."' },";
					}
				}
				?>
				]
			} );

			// Activate an inline edit on click of a table cell
			$('#example').on( 'click', 'tbody td:not(:first-child)', function (e) {
				editor.inline( this );
			} );

			$('#example').DataTable( {
				"scrollX":true,
				dom: "Bfrtip",
				ajax: "db/controllers/<?php echo $table?>.php",
				order: [[ 1, 'asc' ]],
				columns: [
				{
					data: null,
					defaultContent: '',
					className: 'select-checkbox',
					orderable: false
				},
				<?php 
				include_once("connect.php");
				$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$table."' AND TABLE_SCHEMA = 'smes' ";
				$result = mysqli_query($db,$sql);
				$post = array();
				while($row = mysqli_fetch_assoc($result))
				{
					$post[] = $row;
				}
				//array_shift($post);
				foreach ($post as $row) 
				{ 
					foreach ($row as $element)
					{
						echo "{ data: '".$element."' },";
					}
				}
				?>
				],
				select: {
					style:    'os',
					selector: 'td:first-child'
				},
				buttons: [
				{ extend: "create", editor: editor },
				{ extend: "edit",   editor: editor },
				{ extend: "remove", editor: editor }
				]
			} );
		} );
	</script>