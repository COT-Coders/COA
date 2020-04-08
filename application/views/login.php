<html>
<body>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<?php echo form_open('login/form_check'); ?>
		<div class="fl_right">
		<?php echo validation_errors('<div class="error"><i class="fa fa-exclamation-triangle"></i>', '</div>'); ?>
		
		<input type="text" id="user_name" name="user_name" value="<?php echo set_value('User Name'); ?>" placeholder="User Name/Email" required>
		<input type="password" id="password" name="password" placeholder="Password" required/>
	  
		<button type="submit" class="btn btn-primary">Log In</button>
		<!--<input type="image" src="<?php echo base_url();?>assets/layout/images/sign_in.gif" id="signin" alt="Sign In" />-->
		<p> If not registered yet, </p><a href="<?php echo site_url(); ?>/signup"> Sign Up<!--<input type="button" id="signup" alt="Sign Up" name="Sign_Up" value="SIGN UP" style="height:20px;width:80px"/>--></a>
	  </div>

	<?php echo form_close(); ?>

</body>
</html>