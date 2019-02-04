<?php
require_once 'db.php';
$acc->check_sess();
$acc->persist_log();
$acc->logout();
$acc->insert_fee('fee_type', 'price');
?>
<?php include('header.php'); ?>

<form method="post">
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">

				<label for="fee_type">Fee Type</label>
				<input type="text" class="form-control form-control-sm" name="fee_type" id="fee_type" placeholder="Tuition Fee">
				<label for="price">Price</label>
				<input type="text" class="form-control form-control-sm" name="price" id="newprice" placeholder="1000.00">
				<label for="save"></label>
				<button type="submit" id="save" class="btn btn-primary btn-block">Save</button>
			</div>
		</div>
	</div>
</form>	

<?php include('footer.php'); ?>
