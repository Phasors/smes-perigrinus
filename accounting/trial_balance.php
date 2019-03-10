<?php include('header.php'); ?>
<?php
    // unset($_SESSION['cur_date']);
    if (isset($_POST['datepicked']))
    {
        // echo $_POST['datepicked'];
        // unset($_SESSION['cur_date']);
        $_SESSION['cur_date'] = $_POST['datepicked'].' 23:23:23';
        // echo "FAK";
        header("location: trial_balance.php");
    }

?>
    <form class="form-inline justify-content-center" method="post">
      <div class="form-group mb-2">
          <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="datepicker" name="datepicked">
          </div>
          <div class="form-group mx-sm-3 mb-2">
              <button class="btn btn-secondary" type="submit" name="submit">Go</button>
          </div>
      </div>
    </form>
    <h2 id="t1" class="text-center">Trial Balance as of </h2><br>
<?php if (isset($_SESSION['cur_date'])): ?>
    <?php $picked = substr($_SESSION['cur_date'], 0, -8) ?>
    <h2 id="t2" class="text-center"><?php echo date("M j, Y", strtotime($picked)) ?></h2>
    <?php
        // $accounts = $acc->get_accounts();
        $balances = $acc->get_balances($_SESSION['cur_date']);
        $debit = 0;
        $credit = 0;
    ?>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="tb_table">
            <thead>
                <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($balances as $row): ?>
                    <tr>
                        <td><?php echo $row[0] ?></td>
                        <td>&#8369; <?php echo number_format($row[1], 2) ?></td>
                        <td>&#8369; <?php echo number_format($row[2], 2) ?></td>
                        <?php
                            $debit += $row[1];
                            $credit += $row[2];
                         ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <td><b>Balance:</b></td>
                <td><b>&#8369; <?php echo number_format($debit, 2) ?></b></td>
                <td><b>&#8369; <?php echo number_format($credit, 2) ?></b></td>
            </tfoot>
        </table>
    </div>

<?php endif ?>
<?php include('footer.php'); ?>
<script>
    $(document).ready(function() {
        $('#datepicker').datepicker({dateFormat:'yy-mm-dd'});
        var Title = $('#t1').text() + $('#t2').text();

        $('#tb_table').DataTable({
            dom:"lBfrtip",
            buttons:[
                {extend: 'copyHtml5', footer:true},
                {extend: 'excelHtml5', footer:true, title:Title},
                {extend: 'csvHtml5', footer:true, title:Title},
                {extend: 'pdfHtml5', footer:true, orientation: 'landscape', title:Title,
                customize: function(doc) {
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length+1).join('*').split('');
                }},
            ]
            // "ajax": {
            //     "url": "get_balance.php",
            //     "dataSrc":""
            // }
            // "columns" : [{"data":"account_name"}, {"data":"db"}, {"data":"cb"}],
        });


    });
</script>
