<html>
<body>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<?php echo form_open('faculty/staff_form_check'); ?>
		<div class="fl_right">
		<?php echo validation_errors('<div class="error"><i class="fa fa-exclamation-triangle"></i>', '</div>'); ?>
		
		<input type="text" id="staff_name" name="staff_name" placeholder="Staff Name" value="<?php echo set_value('staff_name'); ?>" required />
		<input type="text" id="staff_desig" name="staff_desig" placeholder="Designation" value="<?php echo set_value('staff_desig'); ?>" required/>
		<input type="text" id="staff_info" name="staff_info" placeholder="Personal Info" value="<?php echo set_value('staff_info'); ?>" required/>
		<input type="text" id="staff_address" name="staff_address" placeholder="Address" value="<?php echo set_value('staff_address'); ?>" required/>
		<input type="text" id="staff_ph_no" name="staff_ph_no" placeholder="Phone Number" value="<?php echo set_value('staff_ph_no'); ?>" required/>
		<!--<input type="image" src="<?php echo base_url();?>assets/layout/images/sign_in.gif" id="signin" alt="Sign In" />-->

		<button type="submit" class="btn btn-primary">Add</button>
		
	  </div>

	<?php echo form_close(); ?>

</body>
</html>