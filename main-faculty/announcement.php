<?php include 'header.php'; ?>

<body>
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
					
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addAncmt">Add Announcement</button>
					
					<div id="addAncmt" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>
										Add Announcement
                                        <button type="button" class="close pull-right" data-dismiss="modal">&times;</button>
                                    </h3>
                                </div>
                                <div class="modal-body">
								<form method="POST" action="server.php"></form>
									<label class="col-sm-4" for="an_date">Announcement Category</label>
									<select name="" id="category" class="form-control"> <!--SUBJECT TO CHANGE WAITING FOR KEITH AND JIMMY-->
										<option value="" hidden>--Select--</option>
										<option value="1">Type 1</option>
										<option value="2">Type 2</option>
										<option value="3">Type 3</option>
									</select>
									<br>
                                    <label class="col-sm-4" for="an_date">Date</label>
									<input class="col-sm-8 form-control" disabled type="text" id="an_date" value="<?php echo date("Y-m-d H:i:s") ?>">
									<br>
									<label class="col-sm-4" for="an_title">Title</label>
									<input class="col-sm-8 form-control" type="text" id="an_title" placeholder="Title">
									<br>
									<label class="col-sm-4" for="an_author">Author</label>
									<input class="col-sm-8 form-control" type="text" id="an_author" placeholder="Author"> <!--value="<!?php echo WHATEVER SESSION ?>"-->
									<br>
									<label class="col-sm-4" for="an_msg">Message</label>
									<textarea class="col-sm-8 form-control" type="text area" id="an_msg" placeholder="Type message here"></textarea>
								</div>
                                <div class="modal-footer">
                                    <button type="submit" onclick="an_save()" data-dismiss="modal" class="btn btn-info">Save</button>
                                </div>      
                            </div>
                        </div>
                    </div>
						<div class="table-responsive">
							<table class="table table-striped table-hover" width="100%">
								<thead>
									<tr>
										<th width="20%">Date</th>
										<th width="30%">Title</th>
										<th width="20%">Author</th>
										<th width="30%">Message</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
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

</body>

<?php include 'footer.php'; ?>


<script>

	$(document).ready(function() {
		viewData();
		
		$('#category').change(function() {
			var category = $(this).val();
			alert(category);
		});


	});

	function an_save() {
		var an_date = $('#an_date').val();
		var an_title = $('#an_title').val();
		var an_author = $('#an_author').val();
		var an_msg = $('#an_msg').val();
		var category = $('#category').val();
		alert(category);

		$.post("announce.php",
			{	an_date: an_date,
				an_title: an_title,
				an_author: an_author,
				an_msg: an_msg,
				category: category
			},
			function(data, status) {
				viewData();
			});

		/*$.ajax({
			type: "POST",
			url: "announce.php?p=add",
			data: "an_date="+an_date+"&an_title="+an_title+"&an_author="+an_author+"&an_msg="+an_msg,
			success: function(msg) {
				alert('Sucess');
			}
		});*/
	}

	function viewData() {
		$.ajax({
			type: "GET",
			url: "server.php?page=view",
			success: function(data) {
				$('tbody').html(data);
			}
		});
	}

</script>