<?php include 'header.php'; ?>
<?php
function applicants($conn){
	$output = '';
	$sql = "SELECT * FROM student_applicants";
	$result = mysqli_query($conn,$sql);
	while($row= mysqli_fetch_array($result)){
		$output .= '<tr>';
		$output .= '<td><input type="checkbox" name="checkAll" class="checkSingle" value="'.$row["stdnt_appli_id"].'"></td>';
		$output .= '<td>'.$row["stdnt_appli_id"].'</td>';
		$output .= '<td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>';
		$output .= '<td>'.$row["stdnt_appli_id"].'</td>';
		$output .= '</tr>';
	}
	return $output;
}
?>
<div id="content-body">
	<div class="container" style="margin-top: 5%;">
		<div class="center">
			<span class="welcome"> ADMISSION</span>
			<span class="prof-name">SCREENING</span>
		</div>
		<hr>
	</div>
	<div class="row">
		<div class="col">
			<?php include 'admission/screening.php' ?>
		</div>
	</div>
</div> <!-- conter-body -->
<script type="text/javascript">
	$(document).ready(function() {
		$('[name="screentable"]').DataTable();

		$("#checkedAll").change(function() {
			if (this.checked) {
				$(".checkSingle").each(function() {
					this.checked=true;
				});
			} else {
				$(".checkSingle").each(function() {
					this.checked=false;
				});
			}
		});

		$(".checkSingle").click(function () {
			if ($(this).is(":checked")) {
				var isAllChecked = 0;

				$(".checkSingle").each(function() {
					if (!this.checked)
						isAllChecked = 1;
				});

				if (isAllChecked == 0) {
					$("#checkedAll").prop("checked", true);
				}     
			}
			else {
				$("#checkedAll").prop("checked", false);
			}
		});
		$('[name="Submit"]').click(function(){
			var list= $('#form').serialize();
			console.log(list);
			alert(list);
		});
	} );
</script>


<?php include 'footer.php';?>