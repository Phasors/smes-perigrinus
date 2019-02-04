<?php
require_once 'db.php';
$acc->check_sess();
$acc->persist_log();
$acc->logout();
$id = $_GET['fee_id'];

$acc->change_fee($id, 'newprice');
?>
<?php include('header.php'); ?>

<form method="post">
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="newprice">Enter New Price</label>
				<input type="text" class="form-control form-control-sm" name="newprice" id="newprice" placeholder="1000.00">
				<label for="save"></label>
				<button type="submit" id="save" class="btn btn-primary btn-block">Save</button>
			</div>
		</div>
	</div>
</form>	

<?php include('footer.php'); ?>
