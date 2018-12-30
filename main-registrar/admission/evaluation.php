

<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		<table name="c_eval" id="c_eval" class="table table-striped datatables">
			<thead class="text-center">
				<th><input type="checkbox" id="checkedAll" name="checkedAll"></th>
				<th>Applicant #</th>
				<th>Name of Applicant</th>
				<th></th>
			</thead>
			<tbody class="text-center">
				<?php echo college_applicants($conn); ?>
			</tbody>
		</table>
	</div>
	<div class="tab-pane fade" id="nav-shs" role="tabpanel" aria-labelledby="nav-shs-tab">
		<table name="s_eval" id="s_eval" class="table table-striped datatables">
			<thead class="text-center">
				<th><input type="checkbox" id="checkedAll" name="checkedAll"></th>
				<th>Applicant #</th>
				<th>Name of Applicant</th>
				<th>Details</th>
			</thead>
			<tbody class="text-center">
				<?php echo shs_applicants($conn); ?>
			</tbody>
		</table>
	</div>
	<div class="tab-pane fade" id="nav-jhs" role="tabpanel" aria-labelledby="nav-jhs-tab">
		<table class="table table-bordered">
			<thead>
				<th>Quantity</th>
				<th>Unit</th>
				<th>Item</th>
				<th>Unit Price</th>
				<th>Amount</th>
			</thead>
			<tbody>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tbody>
		</table>
		<div class="row">
			<div class="col-2 offset-5" style="float:right">
				<input type="submit" name="Pay" class="btn btn-success">
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="nav-elem" role="tabpanel" aria-labelledby="nav-elem-tab">
		<table class="table table-bordered">
			<thead>
				<th>Quantity</th>
				<th>Unit</th>
				<th>Item</th>
				<th>Unit Price</th>
				<th>Amount</th>
			</thead>
			<tbody>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tbody>
		</table>
		<div class="row">
			<div class="col-2 offset-5" style="float:right">
				<input type="submit" name="Pay" class="btn btn-success">
			</div>
		</div>
	</div>
</div>

