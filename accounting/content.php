<?php
require_once 'db.php';
$acc->check_sess();
$acc->persist_log();
$acc->logout();
$fees = $acc->get_fees();
$acc->delete_fee('fee_id');
?>
<?php include('header.php'); ?>
	<div class="text-center">
		<?php if(isset($_SESSION['msg'])): ?>
			<div class="alert alert-success">
				<h5><?= $_SESSION['msg'] ?></h5>
				<?php unset($_SESSION['msg']) ?>
			</div>
		<?php endif ?>
		<h1>Content Management</h1>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-sm" id="tab">
			<thead>
				<tr>
					<th>Type</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = $fees->fetch_assoc()): ?>
					<tr>
						<td><?= $row['fee_type'] ?></td>
						<td><?= $row['price'] ?></td>
						<td>
							<form method="post">
								<a class="btn btn-primary btn-sm" href="<?= "editfee.php?fee_id=".$row['fee_id'] ?>">Edit</a> /
								<input type="hidden" value="<?= $row['fee_id'] ?>" name="fee_id">
								<button type="submit" name="del" class="btn btn-primary btn-sm">Delete</button>
							</form>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
	<br>
	<a class="btn btn-primary btn-sm" href="<?= "addfee.php".$row['fee_id'] ?>">Add Fee</a> 
<?php include('footer.php'); ?>
