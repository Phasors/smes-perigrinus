<?php include('header.php'); ?>
    <div class="form-group">
        <form method="post" name="add_entry" id="add_entry">
            <table class="table table-striped table-bordered" id="dynamic_field">
                <tr>
                    <th>Account Name</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
                <tr>
                    <td><input type="text" name="entry[]" id="entry" class="form-control name_list"></td>
                    <td><input type="text" name="debit[]" id="debit" class="form-control name_list"></td>
                    <td><input type="text" name="credit[]" id="credit" class="form-control name_list"></td>
                    <td><button class="btn btn-success" type="button" id="add" name="add">+</button></td>
                </tr>
            </table>
            <button id="submit" type="submit" class="btn btn-dark" name="submit">Submit</button>
        </form>
    </div>
<?php include('footer.php'); ?>
<script>
    $(document).ready(function() {
        var i = 1;
        $("#add").click(function() {
            i++;
            $("#dynamic_field").append(
                '<tr id="row'+i+'"><td><input type="text" name="entry[]" id="entry" class="form-control name_list"></td><td><input type="text" name="debit[]" id="debit" class="form-control name_list"></td>                <td><input type="text" name="credit[]" id="credit" class="form-control name_list"></td><td><button class="btn btn-danger btn_remove" type="button" id="'+i+'" name="remove">X</button></td></tr>'
            );
        });
    });

    $(document).on('click', '.btn_remove',function() {
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });


</script>
