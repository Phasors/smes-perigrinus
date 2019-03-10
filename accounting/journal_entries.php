<?php include('header.php') ?>
<?php

    // print_r(headers_list());
    // header_remove( "Content-type");
    $suc = false;
    if (isset($_POST['entry']) && isset($_POST['debit']) && isset($_POST['credit']) && isset($_POST['descriptions']))
    {
        $suc = $acc->add_entry($_POST['entry'], $_POST['descriptions'], $_POST['debit'], $_POST['credit']);
        header('location: journal_entries.php');
        // echo "<script>window.top.location='journal_entries2.php'</script>";
        ob_end_flush();
    }

    $entries = $acc->get_entries();
    $accounts = $acc->get_accounts();
    $total_balance = 0;
    $balance = 0;
    $row_id = 0;
    $account_ids = "[";
    $account_names = "[";
?>
<?php echo $acc->msg ?>
    <?php if ($acc->msg !== ""): ?>
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> <?php echo $acc->msg ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif ?>
    <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#add_new">Add New</button>
    <div class="modal" id="add_new">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Journal Entry</h3>
                    <button class="close" type="button" data-dismiss="modal">&times</button>
                </div>

                <div class="modal-body">
                    <!-- forms -->
                    <div class="form-group">
                        <form method="post" name="add_entry" id="add_entry" class="needs-validation" novalidate>
                            <table class="table table-striped table-bordered" id="dynamic_field">
                                <tr>
                                    <th>Account Name</th>
                                    <th>Description</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                </tr>
                                <tr>
                                    <!-- <td><input type="text" name="entry[]" id="entry" class="form-control name_list" required></td> -->
                                    <td>
                                        <select class="form-control" name="entry[]">
                                            <?php foreach ($accounts as $account): ?>
                                                <?php $account_ids = $account_ids.$account['account_id'].", " ?>
                                                <?php $account_names = $account_names."'".$account['account_name']."'".", " ?>
                                                <option value="<?php echo $account['account_id'] ?>"><?php echo $account['account_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td><textarea name="descriptions[]" id="description" class="form-control name_list" required></textarea></td>
                                    <td><input type="text" name="debit[]" id="debit" class="form-control name_list" required></td>
                                    <td><input type="text" name="credit[]" id="credit" class="form-control name_list" required></td>
                                    <td><button class="btn btn-success" type="button" id="add" name="add">+</button></td>
                                </tr>
                            </table>
                            <button id="submit" type="submit" class="btn btn-dark" name="submit">Add</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="je_table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Ref No.</th>
                    <th>Person in Charge</th>
                    <th>Account Name</th>
					<th>Description</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = $entries->fetch_assoc()): ?>
                    <tr id="<?php echo $row_id ?>">
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['accounting_journal_id'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['account_name'] ?></td>
						<td><?php echo $row['description'] ?></td>
                        <td>&#8369; <?php echo number_format($row['debit'], 2) ?></td>
                        <td>&#8369; <?php echo number_format($row['credit'], 2) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

<?php include('footer.php') ?>
<script>

    $(document).ready(function() {
        var ids = <?php echo (substr($account_ids, 0, strlen($account_ids)-2)."]") ?>;
        var names = <?php echo (substr($account_names, 0, strlen($account_names)-2)."]") ?>;
        // console.log(ids);
        // console.log(names);
        var options = "";
        for (var i = 0; i < ids.length; i++)
            options += ('<option value='+'"'+ids[i]+'">'+names[i]+'</option>');
        // console.log(options);
        var i = 1;
        $("#add").click(function() {
            i++;
            var acc = '<td><select class="form-control" name="entry[]">'+options+'</select></td>';
            var desc = '<td><textarea class="form-control name_list descs" name="descriptions[]" required></textarea></td>';
            var debit = '<td><input type="text" name="debit[]" id="debit" class="form-control name_list" required></td>';
            var credit = '<td><input type="text" name="credit[]" id="credit" class="form-control name_list" required></td>';
            var btn = '<td><button class="btn btn-danger btn_remove" type="button" id="'+i+'" name="remove">X</button></td>';
            $("#dynamic_field").append('<tr id="row'+i+'">'+acc+desc+debit+credit+btn+'</tr>');
        });

        // $('#description').keyup(function() {
        //     var descs = $('.descs');
        //     var txt = $(this).val();
        //     descs.each(function() {
        //         $(this).val(txt);
        //     });
        // });
    });

    $(document).on('click', '.btn_remove',function() {
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });

</script>
  <script type="text/javascript">
      $(document).ready(function() {
          msg = "Journal Entry";
          var table = $("#je_table").DataTable({
              dom: "lBfrtip",
            // buttons: ['copyHtml5', {extend:'excelHtml5', title:msg}, {extend:'csvHtml5', title:msg}, {extend:'pdfHtml5', title:msg}]
              buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
          });

          $('#je_table tbody').on( 'click', 'td', function() {
              table.search(table.cell(this).data()).draw();
          });

          $('.dt-button').addClass("btn btn-primary");
          // $('.dt-button').wrapAll('<div class="btn-group" role="group" aria-label="Basic example"></div>');
      });
  </script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
