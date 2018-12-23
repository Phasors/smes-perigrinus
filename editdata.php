<!-- Modal for Edit -->
<div class="modal fade" id="edit46" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal" >&times;</button>
				<h2 class="modal-title text-center">academic_year</h2>
			</div>
			<div class="modal-body">
				<form action="editdataaction.php?action=edit&table=46" method="post">
					<div class="row">
						<div class = "col-sm-8">
							<label> ay_desc </label>
							<input type="text" id="ay_desc" name="ay_desc" class="form-control">
							<input type="hidden" id="trckno46" name="trackno" class="form-control" >
						</div>
						<div class = "col-sm-4">
							<label> Current School Year </label> <br>
							<label class="radio-inline" > <input type="radio"  name="right_now" value="1"> Yes </label>
							<label class="radio-inline"> <input type="radio"  name="right_now" value="0"> No</label>
						</div>

					</div>
					<div class="row">	
						<div class = "col-sm-6">
							<label> ay_start </label>
							<input type="text" id="ay_start" name="ay_start" class="form-control">
						</div>
						<div class = "col-sm-6">
							<label> ay_end </label>
							<input type="text" id="ay_end" name="ay_end" class="form-control">
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

