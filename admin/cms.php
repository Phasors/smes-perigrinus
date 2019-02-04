<?php
include("connect.php");
include("includes.php");
include('session.php');
?>
<div >
	<?php 
	$sql="SELECT * FROM `portal_features`";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result);
	$pic1= $row['event_pic1'];
	$pic2= $row['event_pic2'];
	$pic3= $row['event_pic3'];
	$about= $row['about'];
	?>
	<h2 class="text-center">PICTURES</h2>
	<div class="row">
		<center>			
			<div class = "col-sm-4">
				<img src='<?php echo"$pic1"?>' style='text-align:center;height:300px;max-width:400px;  display: block; margin-left: auto;  margin-right: auto;'> <br>
				<button type='button' class='btn btn-success' data-toggle='modal' data-target='#cp1'  style='width:50%'>
					Change Picture
				</button>
			</div>
			<div class = "col-sm-4">
				<img src='<?php echo"$pic2"?>' style='height:300px;max-width:400px;display: block; margin-left: auto;  margin-right: auto;'> <br>
				<button type='button' class='btn btn-success' data-toggle='modal' data-target='#cp2'  style='width:50%'>
					Change Picture
				</button>
			</div>
			<div class = "col-sm-4">
				<img src='<?php echo"$pic3"?>' style='height:300px;max-width:400px;display: block; margin-left: auto;  margin-right: auto;'> <br>
				<button type='button' class='btn btn-success' data-toggle='modal' data-target='#cp3' style='width:50%'>
					Change Picture
				</button>
			</div>
		</center>
	</div>
	<div class="text-center" style="margin: 10px">
		<h2 class="text-center" >ABOUT</h2>
		<?php 
		echo "<label id='about'>".$about."</label>";
		?>
		<br><br>
		<button type='button' class='btn btn-success' data-toggle='modal' data-target='#about2' onclick='about(".$trackno.")' style='width:10%'>
			Edit
		</button>
	</div>
</div>

<!-- Modal for Edit -->
<div class="modal fade" id="cp1" role="dialog" >
	<div class="modal-dialog" >

		<!-- Modal content-->
		<div class="modal-content" style="width: 50%; margin: auto">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal" >&times;</button>
				<h2 class="modal-title text-center">Change Picture</h2>
			</div>
			<div class="modal-body">
				<form action="cmsaction.php?pic=1" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class = "col-sm-12">
							<label>Picture</label>
							<input type="file" style="height: 35px" name="fileToUpload"/> 
						</div>
					</div>	
					<div class="row text-center">
						<input type="submit" class="btn btn-success" style="width:20%" value="Submit">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- Modal for Edit -->
<div class="modal fade" id="cp2" role="dialog" >
	<div class="modal-dialog" >

		<!-- Modal content-->
		<div class="modal-content" style="width: 50%; margin: auto">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal" >&times;</button>
				<h2 class="modal-title text-center">Change Picture</h2>
			</div>
			<div class="modal-body">
				<form action="cmsaction.php?pic=2" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class = "col-sm-12">
							<label>Picture</label>
							<input type="file" style="height: 35px" name="fileToUpload"/> 
						</div>
					</div>	
					<div class="row text-center">
						<input type="submit" class="btn btn-success" style="width:20%" value="Submit">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<!-- Modal for Edit -->
<div class="modal fade" id="cp3" role="dialog" >
	<div class="modal-dialog" >

		<!-- Modal content-->
		<div class="modal-content" style="width: 50%; margin: auto">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal" >&times;</button>
				<h2 class="modal-title text-center">Change Picture</h2>
			</div>
			<div class="modal-body">
				<form action="cmsaction.php?pic=3" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class = "col-sm-12">
							<label>Picture</label>
							<input type="file" style="height: 35px" name="fileToUpload"/> 
						</div>
					</div>	
					<div class="row text-center">
						<input type="submit" class="btn btn-success" style="width:20%" value="Submit">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
<!-- Modal for Edit -->
<div class="modal fade" id="about2" role="dialog" >
	<div class="modal-dialog" >

		<!-- Modal content-->
		<div class="modal-content" style="width: 80%; margin: auto">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal" >&times;</button>
				<h2 class="modal-title text-center">About</h2>
			</div>
			<div class="modal-body">
				<form action="cmsaction.php?pic=4" method="post" enctype="multipart/form-data">
					<div class="form-group">
							<textarea rows="5" id="about1" class="form-control" name="about"></textarea> 
					</div>	
					<div class="row text-center">
						<input type="submit" class="btn btn-success" style="width:20%" value="Submit">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	function about(num){
	about = document.getElementById("about").innerHTML;
	document.getElementById("about1").value = about;
	}
</script>