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
				<form>
					<div class="row">
						<!--div class="col-sm-2 col">
							<select id="sem_select" name="cd-dropdown" class="form-control">
								<option selected hidden>Academic Year</option>
							<!?php
								$res = $db->query("SELECT * FROM academic_year WHERE ay_status = 1");
								while($row = $res->fetch_assoc()) {
							?>
								<option value="<!?php $row['ay_id']?>"><!?php echo $row['ay_desc'] ?></option>
							<!?php
								}
							?>
							</select>
						</div-->
						<div class="col-sm-3 col">
							<select id="college" class="form-control">
								<option value="0" selected hidden>College</option>
							<?php
								$res = $db->query("SELECT * FROM colleges");
								while($row = $res->fetch_assoc()) {
							?>
								<option value="<?php echo $row['college_id'] ?>"><?php echo $row['college_name'] ?></option>
							<?php
								}
							?>
							</select>
						</div>
						<div class="col-sm-3 col">
							<select name="" id="program" class="form-control">
								<option value="0" selected hidden>Program</option>
							</select>
						</div>
						<div class="col-sm-3 col">
							<select name="" id="year_level" class="form-control">
								<option value="0" selected hidden>Year Level</option>
							</select>
						</div>
						<div class="col-sm-3 col">
							<select name="" id="section" class="form-control">
								<option value="0" selected hidden>Section</option>
							</select>
						</div>
						
					</div>

					<br>
					<div class="card">
						<div class="card-body">

							<br>
							<div class="table-responsive">
								<table class="table table-striped table-hover" width="100%">
									<thead>
										<tr>
											<th>Name</th>
										</tr>
									</thead>
									<tbody id="tbody">
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
						</div>
					</div>

				</form>
			</div>
			<div style="margin-bottom: 150px;"></div>
			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>

<script>
	$(document).ready(function() {
		$('#college').change(function() {
			var college = $(this).val();
			
			$.post("blockSer.php",
			{college: college},
			function(data, status) {
				$('#program').html(data);
				//alert(college);
				//console.log(data);
			});
		});
		$('#program').change(function() {
			var program = $(this).val();
			
			$.post("blockSer.php",
			{program: program},
			function(data, status) {
				$('#year_level').html(data);
				//alert(program);
				//console.log(data);
			});
		});
		$('#year_level').change(function() {
			var year_level = $(this).val();
			
			$.post("blockSer.php",
			{year_level: year_level},
			function(data, status) {
				$('#section').html(data);
				//alert(year_level);
				//console.log(data);
			});
		});
		$('#section').change(function() {
			var section = $(this).val();
			var college = $('#college').val();
			var program = $('#program').val();
			var year_level = $('#year_level').val();

			//alert("College - " + college);
			
			$.post("blockSer.php",
			{
				col: college,
				prog: program,
				year_lvl: year_level,
				section: section
			},
			function(data, status) {
				$('#tbody').html(data);
				//alert(section+college+program+year_level);
				//console.log(data);
			});
		});

	});


</script>