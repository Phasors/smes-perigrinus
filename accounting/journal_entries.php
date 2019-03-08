<?php
    require_once 'db.php';

    if (isset($_POST['entry']) && isset($_POST['debit']) && isset($_POST['credit']))
    {
        $acc->add_entry($_POST['entry'], $_POST['debit'], $_POST['credit']);
        header('location: journal_entries.php');
    }

    $res = $acc->query("SELECT * FROM accounting_journal");
    $total_balance = 0;
    $balance = 0;
    $row_id = 0;
?>
<?php include('header.php') ?>
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#add_new">Add New</button>
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
                                    <td><input type="text" name="entry[]" id="entry" class="form-control name_list" required></td>
                                    <td><textarea name="description[]" id="description" class="form-control name_list" required></textarea></td>
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
        <table class="table table-bordered" id="je_table">
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
                </tr>
            </thead>

            <tbody>
                <?php while($row = $res->fetch_assoc()): ?>
                    <tr id="<?php echo $row_id ?>">
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['account_journal_id'] ?></td>
                        <td>Kyle Hipolito</td>
                        <td><?php echo $row['account_title'] ?></td>
						<td>TARANTADO</td>
                        <td><?php echo $row['debit'] ?></td>
                        <td><?php echo $row['credit'] ?></td>
                        <?php
                            $balance += ($row['debit'] - $row['credit']);
                        ?>
                        <td><?php echo $balance ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

<?php include('footer.php') ?>
<script>

    $(document).ready(function() {
        var i = 1;
        $("#add").click(function() {
            i++;
            $("#dynamic_field").append(
                '<tr id="row'+i+'"><td><input type="text" name="entry[]" id="entry" class="form-control name_list" required></td><td><input type="text" name="debit[]" id="debit" class="form-control name_list" required></td>                <td><input type="text" name="credit[]" id="credit" class="form-control name_list" required></td><td><button class="btn btn-danger btn_remove" type="button" id="'+i+'" name="remove">X</button></td></tr>'
            );
        });
    });

    $(document).on('click', '.btn_remove',function() {
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });

</script>
  <script type="text/javascript">
      $(document).ready(function() {
          var table = $("#je_table").DataTable({
              dom: "Bfrtip",
              buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
          });

          $('#je_table tbody').on( 'click', 'td', function() {
              table.search(table.cell(this).data()).draw();
          });

          $('.dt-button').addClass("btn btn-success");
          $('.dt-button').wrapAll('<div class="btn-group" role="group" aria-label="Basic example"></div>');
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
