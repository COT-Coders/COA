<!--<html>-->
<body>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<?php echo form_open('department/update_hod_form'); ?>
		<div class="fl_right">
		<!-- No need of displaying validation errors as fields are selected from dropdowns. -->
		<label> Deparment </label>
		<?php echo form_dropdown('dept_id', $records, '0', 'class="form-control" id="dept_id" required'); ?>
		
		<label> HOD </label>
		<select class="form-control" id="fac_id" name="fac_id" required>
			<option>No Selected</option>
		</select>
		
		<button type="submit" class="btn btn-primary">Update HOD</button>
		</div>
	<?php echo form_close(); ?>

	<script type="text/javascript">
			$('#dept_id').change(function() {
				var dept_id = $('#dept_id').val();
				//alert(dept_id);

				$.ajax({
					url : "<?php echo site_url('department/get_faculty_list');?>",
					method : "POST",
					data : {dept_id: dept_id},
					success: function(msg) {
						//alert($.trim(msg));
						var obj = JSON.parse(msg, function (key, value) { return value; });
						//alert($.trim(obj[0].Name));
						//alert(obj.length);
						//alert(obj[0].Faculty_ID);

						var html = '';
						var i;
						for(i=0; i<obj.length; i++)
							html += '<option value='+obj[i].Faculty_ID+'>'+obj[i].Name+'</option>';
						$('#fac_id').html(html);
					}
				});
				return false;
			}); 
	</script>

</body>
<!--</html>-->