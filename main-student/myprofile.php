<?php include 'header.php'; ?>

<div class="wrapper">

	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			<div class="container">
				<?php include 'myprofile/nav-pills.php'; ?>
			</div>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
					<?php include 'myprofile/personal_data.php'; ?>
					<div style="margin-bottom: 150px;"></div>
				</div>

				<div class="tab-pane fade" id="nav-family-back" role="tabpanel" aria-labelledby="nav-profile-tab">
					<?php include 'myprofile/family_back.php'; ?>
					<div style="margin-bottom: 150px;"></div>
				</div>

				<div class="tab-pane fade" id="nav-educ-attn" role="tabpanel" aria-labelledby="nav-educ-attn-tab">
					<?php include 'myprofile/educ_attain.php'; ?>
					<div style="margin-bottom: 150px;"></div>
				</div>

				<div class="tab-pane fade" id="change-pass" role="tabpanel" aria-labelledby="change-pass-tab">
					<?php include 'myprofile/change_pass.php'; ?>
				</div>
			</div>


			<?php include 'components/bottom-navbar.php'; ?>

		</div> <!-- content-body -->
	</div> <!-- content -->
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>
