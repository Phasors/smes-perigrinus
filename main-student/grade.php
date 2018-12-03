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
								<thead>
									<tr>
										<th>Subject Code</th>
										<th>Subject Name</th>
										<th>Faculty Name</th>
										<th>Unit</th>
										<th>Final Grade</th>
										<th>Grade Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>BSCOE-ELEC4</td>
										<td>BSCOE ELECTIVE 4</td>
										<td>DELA CRUZ, ARVIN R</td>
										<td>3</td>
										<td>1.75</td>
										<td>P</td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
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
