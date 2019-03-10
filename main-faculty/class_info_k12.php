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
						<div class="col-sm-4 col">
							<select id="seuction" class="form-control sec">
								<option value="0" selected hidden>Grade and Section</option>
							<?php
								$res = $db->query("SELECT * FROM k12_sections as K
													INNER JOIN academic_year as Y
														ON K.ay_id = Y.ay_id
													INNER JOIN grade_levels as G
														ON K.grade_level_id = G.grade_level_id
													WHERE Y.ay_status = 1");
								while($row = $res->fetch_assoc()) {
							?>
								<option value="<?php echo $row['k12_section_id'] ?>"><?php echo "Grade ".$row['grade_level_id'].
												", Section ".$row['section_no'] ?></option>
							<?php
								}
							?>
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
		$('#seuction').change(function() {
			var section = $(this).val();
			
			$.post("classSer.php",
			{section: section},
			function(data, status) {
				$('#tbody').html(data);
				//alert(section);
				//console.log(data);
			});
		});
	});


</script>