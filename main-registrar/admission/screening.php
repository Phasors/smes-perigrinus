<table name="screentable" id="screentable" class="table table-striped">
	<thead class="text-center">
		<th><input type="checkbox" id="checkedAll" name="checkedAll"></th>
		<th>Applicant #</th>
		<th>Name of Applicant</th>
		<th>Student Level</th>
	</thead>
	<tbody class="text-center">
		<?php echo applicants($conn); ?>
	</tbody>
</table>
