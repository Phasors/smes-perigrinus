
</div> <!-- content -->
</div> <!-- wrapper -->

<!-- <script src="assets/js/jquery-3.3.1.slim.min.js"></script> -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom js -->
<script src="js/design.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$('.table').DataTable();

		$("#checkedAll").change(function() {
			if (this.checked) {
				$(".checkSingle").each(function() {
					this.checked=true;
				});
			} else {
				$(".checkSingle").each(function() {
					this.checked=false;
				});
			}
		});

		$(".checkSingle").click(function () {
			if ($(this).is(":checked")) {
				var isAllChecked = 0;

				$(".checkSingle").each(function() {
					if (!this.checked)
						isAllChecked = 1;
				});

				if (isAllChecked == 0) {
					$("#checkedAll").prop("checked", true);
				}     
			}
			else {
				$("#checkedAll").prop("checked", false);
			}
		});
		$('[name="Submit"]').click(function(){
			var list= $('#form').serialize();
			console.log(list);
			alert(list);
		});

		$(".view_appli").click(function(){
			edit = $(this).data("index");
			$.ajax({
				url:"fetch.php",
				method:"POST",
				data:{c_appli_id:edit},
				dataType:"json",
				success:function(data){
					$("[name='appnum']").val(data.stdnt_appli_id);
					var name = data.fname+" "+data.mname+" "+data.lname;
					$("[name='ApplicantName']").val(name);
				},
				error:function(error){
					console.log(error);
				}
			});
		});
		$(".view_appli_shs").click(function(){
			edit = $(this).data("index");
			alert(edit);
			$.ajax({
				url:"fetch.php",
				method:"POST",
				data:{s_appli_id:edit},
				dataType:"json",
				success:function(data){
					$("[name='s_appnum']").val(data.stdnt_appli_id);
					var name = data.fname+" "+data.mname+" "+data.lname;
					$("[name='s_ApplicantName']").val(name);
				},
				error:function(error){
					console.log(error);
				}
			});
		});
	});
</script>
</body>

</html>
<!-- appnum
ApplicantName -->