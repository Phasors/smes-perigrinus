<?php
require_once 'db.php';
$acc->check_sess();
$acc->persist_log();
$acc->logout();

?>
<?php include('header.php'); ?>
	<div class="table-responsive">
		<table class="table table-striped table-sm" id="tab">
			<thead>
				<tr>
					<th>Transaction No.</th>
					<th>Student No.</th>
					<th>Amount Paid</th>
					<th>Balance</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
<?php include('footer.php'); ?>
