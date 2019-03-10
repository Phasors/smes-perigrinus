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
						<select id="grade_level" class="form-control col-sm-4 col">
							<option value="0" selected hidden>Grade Level</option>
						<?php
							$res = $db->query("SELECT * FROM grade_levels");
							while($row = $res->fetch_assoc()) {
						?>
							<option value="<?php echo $row['grade_level_id'] ?>">
								<?php echo $row['grade_desc']." - ".$row['grade_level']?>
							</option>
						<?php
							}
						?>
						</select>
						<select name="" id="seuction" class="form-control col-sm-4 col">
							<option value="0" selected hidden>Section</option>
						</select>
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
		$('#grade_level').change(function() {
			var grade_level = $(this).val();
			
			$.post("classSer.php",
			{grade_level: grade_level},
			function(data, status) {
				$('#seuction').html(data);
				//alert(section);
				console.log(data);
			});
		});
		$('#seuction').change(function() {
			var grade_level = $('#grade_level').val();
			var section = $(this).val();
			
			$.post("classSer.php",
			{
				section: section,
				grade_level: grade_level
			},
			function(data, status) {
				$('#tbody').html(data);
				//alert(section);
				//console.log(data);
			});
		});
	});


</script>