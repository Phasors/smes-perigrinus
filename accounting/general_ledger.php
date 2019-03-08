
<?php include('header.php'); ?>
    <div class="table-responsive">
        <table class="table table-bordered" id="gl_table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Ref No.</th>
                    <th>Person in Charge</th>
                    <th>Account Name</th>
					<th>Description</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                    <th>View Report</th>
                </tr>
            </thead>
        </table>
    </div>

<?php include('footer.php'); ?>
<script>
	$(document).ready(function() {
		$("#gl_table").dataTable();
	});

</script>
