
<?php include 'header.php'; ?>



<div id="content-body">

	<div class="container" style="margin-top: 5%;">
		<div class="center">
			<span class="welcome"> WELCOME</span>
			<span class="prof-name"><?php echo $username; ?></span>
		</div>
		<hr>

		<div class="row" style="margin-top: 5%;">
			<div class="col-sm-6">
				<a href="admission-index.php" >
					<button class="d-block mx-auto btn-dash">
						<h3>ADMISSION</h3>
					</button>
				</a>
			</div>
			<div class="col-sm-6">
				<a href="grades.php">
					<button class="d-block mx-auto btn-dash">
						<h3>ENROLLMENT</h3>
					</button>
				</a>
			</div>
		</div>
		<div class="row" style="margin-top: 5%;">
			<div class="col-sm-6">
				<a href="myprofile.php">
					<button class="d-block mx-auto btn-dash">
						<h3>USER ACCOUNT</h3>
					</button>
				</a>
			</div>
			<div class="col-sm-6">
				<a href="myprofile.php">
					<button class="d-block mx-auto btn-dash">
						<h3>STUDENT REQUEST</h3>
					</button>
				</a>
			</div>
		</div>
		
		<div class="row" style="margin-top: 5%;">
			<div class="col-sm-6">
				<a href="class_info.php">
					<button class="d-block mx-auto btn-dash">
						<h3>CURRICULUM CONFIGURATION AND SETTING</h3>
					</button>
				</a>
			</div>
			<div class="col-sm-6">
				<a href="approval.php">
					<button class="d-block mx-auto btn-dash">
						<h3>ACADEMIC RECORD AND REPORT</h3>
					</button>
				</a>
			</div>
		</div>
	</div>


</div> <!-- conter-body -->



<?php include 'footer.php';?>