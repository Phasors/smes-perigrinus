<?php include 'header.php'; ?>

<div class="wrapper">

	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">

			<?php include 'request/nav-pills-req.php'; ?>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="nav-ace-add" role="tabpanel" aria-labelledby="nav-ace-add-tab">
					<?php include 'request/ace-add.php'; ?>
					<div style="margin-bottom: 150px;"></div>
				</div>

				<div class="tab-pane fade" id="nav-ace-chg" role="tabpanel" aria-labelledby="nav-ace-chg-tab">
					<?php include 'request/ace-change.php'; ?>
					<div style="margin-bottom: 150px;"></div>
				</div>

				<div class="tab-pane fade" id="nav-overload" role="tabpanel" aria-labelledby="nav-overload-tab">
					<?php include 'request/overload.php'; ?>
					<div style="margin-bottom: 150px;"></div>
				</div>

			</div>

			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content -->
</div> <!-- wrapper -->


<?php include 'footer.php'; ?>
