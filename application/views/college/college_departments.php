<body>
	
<div class="container-fluid">

	<div class="row">
		<div class="col-sm-2 col-md-2"> </div>
			<div class="col-sm-8 col-md-8" style="margin-left:5;margin-right: auto;margin-top: 30">
				<div class="jumbotron jumbotron-fluid"> 

					<h3 style="margin-left: 10"> Departments </h3>
					<ul>
						<?php
						$no_of_dept = count($dept_names);
	            		for($i=0; $i<$no_of_dept; $i++) {
	            			//<!-- dept_id not to be displayed in URL, either do it by session or encode the url -->
	            			//$link = "department/desc/".$i;
	            			//echo $link;
	            			//$encoded_link = urlencode($link);
	            			//echo $encoded_link;
	            			?><li><a href="<?php echo site_url("department/desc/".$dept_names[$i]['Dept_ID']); // echo $encoded_link; ?>" > <?php echo $dept_names[$i]['Dept_Name']; ?> </a> </li><?php
	            		}

	            		/*echo form_open('department/index'); ?>

	            		<?php for($i=0; $i<$no_of_dept; $i++) { ?>
	            		<li><input type="submit" id="dept_id" name="dept_id" value="<?php echo $dept_names[$i]['Dept_Name']; ?>" ></li>
	            		<?php } ?>

	            		<?php echo form_close();
	            		*/
	            		?>
	            		<li>placeholder</li>
	            		<li>placeholder</li>
	            		<li>placeholder</li>
	            		<li>placeholder</li>
	            		<li>placeholder</li>
	            		<li>placeholder</li>
	            		<li>placeholder</li>
					</ul>

				</div>
			</div>
	</div>

</div>

</body>