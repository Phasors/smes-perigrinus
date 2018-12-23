<!-- Modal for Add -->
		<div class="modal fade" id="add46" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" >
						<button type="button" class="close" data-dismiss="modal" >&times;</button>
						<h2 class="modal-title text-center">academic_year</h2>
					</div>
					<div class="modal-body">
						<form action="adddataaction.php?table=46" method="post">
							<div class="row">
								<div class = "col-sm-4">
									<label> ay_desc </label>
									<input type="text" name="ay_desc" class="form-control">
									<input type="hidden" name="trackno" class="form-control" >
								</div>
								<div class = "col-sm-4">
									<label> ay_start </label>
									<input type="text" name="ay_start" class="form-control">
								</div>
								<div class = "col-sm-4">
									<label> ay_end </label>
									<input type="text" name="ay_end" class="form-control">
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

