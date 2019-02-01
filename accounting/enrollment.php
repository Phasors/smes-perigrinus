<?php
require_once 'db.php';
$acc->check_sess();
$acc->persist_log();
$acc->logout();

?>
<?php include('header.php'); ?>
<main role="main" class="col-md-9 ml-md-auto col-lg-10 pt-3 px-4">
	<div class="table-responsive">
		<table class="table table-striped table-sm" id="tab">
			<thead>
				<tr>
					<th>Transaction No.</th>
					<th>Student No.</th>
					<th>Name</th>
					<th>Course</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>
</main>
<?php include('footer.php'); ?>
