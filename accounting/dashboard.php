<?php 
require_once 'db.php';

$acc->check_sess();
$acc->persist_log();
$acc->logout();
?>

<?php include('header.php'); ?>

	
<?php include('footer.php'); ?>
