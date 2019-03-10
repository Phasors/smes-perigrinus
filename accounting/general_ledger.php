
<?php include('header.php'); ?>
<?php
    $accounts = $acc->get_accounts();
    $balance = 0;
?>
    <h2 class="text-center">General Ledger</h2><br>
    <form class="form-inline justify-content-center">
      <div class="form-group mb-2">
          <div class="form-group mx-sm-3 mb-2">
            <select id="accounts" class="form-control" name="account">
                <option value="0">All</option>
                <?php foreach ($accounts as $account): ?>
                    <option value="<?php echo $account['account_id'] ?>"><?php echo $account['account_name'] ?></option>
                <?php endforeach; ?>
            </select>
          </div>
      </div>
    </form>


    <?php foreach ($accounts as $account): ?>
        <div class="account_div" id="<?php echo $account['account_name'] ?>">
            <?php
                $id = $account['account_id'];
                $results = $acc->query("SELECT accounting_journal.date, accounting_journal.accounting_journal_id, accounting_journal.description,
                accounting_journal.debit, accounting_journal.credit FROM accounting_journal WHERE account_id='$id'");
            ?>
            <h2><?php echo $account['account_name'] ?></h2><br>
            <div class="table-responsive" >
                <table class="table table-bordered gl_table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Ref No.</th>
        					<th>Description</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $results->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['account_journal_id'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo number_format($row['debit'], 2) ?></td>
                                <td><?php echo number_format($row['credit'], 2) ?></td>
                                <?php $balance += ($row['debit'] - $row['credit']) ?>
                                <td><?php echo number_format($balance, 2) ?></td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                    <caption>
                        Balance: <u><?php echo number_format($balance, 2) ?></u>
                    </caption>
                </table>
            </div>
        </div>
        <?php $balance = 0; ?>

    <?php endforeach; ?>

<?php include('footer.php'); ?>
<script>
    var msg = "General Ledger";
	$(document).ready(function() {
		$(".gl_table").DataTable({
            dom : "lBfrtip",
            buttons: ['copyHtml5', {extend:'excelHtml5', title:msg}, {extend:'csvHtml5', title:msg}, {extend:'pdfHtml5', title:msg}]
        });
        // $('.dt-button').addClass("btn btn-primary");
        // $('.dt-button').wrapAll('<div class="btn-group" role="group" aria-label="Basic example"></div>');
        var sel = $('#accounts');
        sel.change(function() {
            var divs = $('.account_div');
            divs.each(function() {
                $(this).show();
            })
            var txt = $(this).children('option').filter(':selected').text();
            console.log(txt);
            divs.each(function() {
                if (txt == "All")
                    $(this).show();
                else if (txt != $(this).children('h2').text())
                    $(this).hide();
            })
        });

        // $('#datepicker').datepicker({
        //     format: "mm-yyyy",
        //     viewMode: "months",
        //     minViewMode: "months"
        // });
	});

</script>
