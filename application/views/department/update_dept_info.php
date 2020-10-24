<!--<html>-->
<body>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<?php echo form_open('department/update_dept_info_form'); ?>
		<div class="fl_right">
		<label> About (History) </label>
		<?php
			$options1 = array('name' => 'about',
							'id' => 'about',
							'value' => set_value('about', $records[0]['History']),
							'class' => 'form-control',
							'cols' => '5',
							'rows' => '5'
						);
			echo form_textarea($options1);
		?>
		
		<label> Vision </label>
		<?php
			$options2 = array('name' => 'vision',
							'id' => 'vision',
							'value' => set_value('vision', $records[0]['Vision']),
							'class' => 'form-control',
							'cols' => '5',
							'rows' => '5'
						);
			echo form_textarea($options2);
		?>
		
		<label> Mission </label>
		<?php
			$options3 = array('name' => 'mission',
							'id' => 'mission',
							'value' => set_value('mission', $records[0]['Mission']),
							'class' => 'form-control',
							'cols' => '5',
							'rows' => '5'
						);
			echo form_textarea($options3);
		?>

		<label> Mandate </label>
		<?php
			$options4 = array('name' => 'mandate',
							'id' => 'mandate',
							'value' => set_value('mandate', $records[0]['Mandate']),
							'class' => 'form-control',
							'cols' => '5',
							'rows' => '5'
						);
			echo form_textarea($options4);
		?>

		<button type="submit" class="btn btn-primary">Update Info</button>
		</div>
	<?php echo form_close(); ?>

</body>
<!--</html>-->