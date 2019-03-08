<?php include 'header.php'; ?>

<div class="wrapper">
	
	<?php include 'components/sidebar.php'; ?>
	<div id="content">
		<!-- for phone view -->
		<?php include 'components/topbar.php'; ?>
		
		<div id="content-body">
			
			<div class="container">
				<h3 class="text-center announce-title">ANNOUNCEMENTS</h3>
				<div class="card card-default">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th width="20%">Date</th>
										<th width="30%">Title</th>
										<th width="20%">Author</th>
										<th width="30%">Message</th>
									</tr>
								</thead>
								<!-- <?php
								//$conn = mysqli_connect("localhost", "root", "", "smes");
								//if ($conn-> connect_error){
								//	die("Connection failed:". $conn-> connect_error);
								//}

								//$sql = "SELECT title, content, announcer, announcer_position FROM ANNOUNCEMENTS";
								//$result = $conn-> query($sql);

								//if ($result->  num_rows > 0) {
								//	while ($row = $result-> fetch_assoc()) {
								//		echo "<tr><td>". $row["title"]."</td><td>". $row["content"]."</td><td>". $row["announcer"]."</td><td>". $row["announcer_position"]."</td></tr>";
								//	}
								//	echo "</table>";
								// }
								//else {
								//	echo "0 result";
								// }
								?> -->
								<tbody>
									<tr>
										<td>December 3, 2018</td>
										<td><a href="#">Event</a></td>
										<td>Author</td>
										<td>Event Details</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


			<?php include 'components/bottom-navbar.php'; ?>
		</div> <!-- content-body -->
	</div> <!-- content --> 
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>


