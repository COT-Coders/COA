<html>
<body>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<?php echo form_open('faculty/staff_form_check'); ?>
		<div class="fl_right">
		<?php echo validation_errors('<div class="error"><i class="fa fa-exclamation-triangle"></i>', '</div>'); ?>
		
		<input type="text" id="staff_name" name="staff_name" placeholder="Staff Name" required>
		<input type="text" id="staff_desig" name="staff_desig" placeholder="Designation" required>
		<input type="text" id="staff_info" name="staff_info" placeholder="Personal Info" required>
		<!--<input type="image" src="<?php echo base_url();?>assets/layout/images/sign_in.gif" id="signin" alt="Sign In" />-->

		<button type="submit" class="btn btn-primary">Add</button>
		
	  </div>

	<?php echo form_close(); ?>

</body>
</html>