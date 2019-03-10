<?php include 'header.php'; 
		include 'db.php'
		?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			<div class="container">
                <h2><a href="class_info_k12.php">K12 CLASS</a></h2>
                <h2><a href="class_info_block.php">COLLEGE BLOCK</a></h2>
                <!--h2><a href="class_info_subject.php">BY SUBJECT</a></h2-->
            </div>
            <div style="margin-bottom: 150px;"></div>
            <?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->