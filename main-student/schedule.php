

<?php include 'header.php'; ?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			<form>
				<div class="row">
					<div class="col-sm-2 col">
						<select id="year_select" name="cd-dropdown" class="form-control">
							<option value="-1" selected>YEAR</option>
							<option value="1">YEAR 1</option>
							<option value="2">YEAR 2</option>
							<option value="3">YEAR 3</option>
							<option value="4">YEAR 4</option>
						</select>
					</div>
					<div class="col-sm-2 col">
						<select id="grade_select" name="cd-dropdown" class="form-control">
							<option value="-1" selected>SEM</option>
							<option value="1">SEM 1</option>
							<option value="2">SEM 2</option>
						</select>
					</div>
				</div>

				<br>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover" width="100%">
							<?php
							
									$id = $_SESSION['id']; 

									include_once('../conn.php');
									echo '<table border="5px" cellspacing="3px">';
											echo '<tr >';
											echo '<th >Subject';
											echo '</th >';
											echo '<th >Schedule';
											echo '</th >';
											echo '<th >Faculty';
											echo '</th >';
											echo '<th >AY';
											echo '</th >';
											echo '<th >Semester';
											echo '</th >';
											echo '</tr >';

									$result = mysqli_query($conn,"SELECT * FROM schedules WHERE stdnt_info_id = '$id'");
										while($row = mysqli_fetch_array($result))
										{

											
											echo '<tr >';
											echo '<td >'.$row['schedule_id'].'</td>';
											echo '<td >'.$row['course_schedule_id'].'</td>';
												
											echo '<td style="text-transform:uppercase;">'.$row['faculty_id'].'</td>';
											echo '<td style="text-transform:uppercase;">'.$row['ay'].'</td>';
											echo '<td style="text-transform:uppercase;">'.$row['semester'].'</td>';
											 
											echo '</tr>';
										}
							

echo '</table>';
?>	
							</table>
						</div>
					</div>
				</div>
				<br>
			</form>

			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>
