<body>
	
<div class="container-fluid">

	<div class="row">
		<div class="col-sm-2 col-md-2"> </div>
			<div class="col-sm-8 col-md-8" style="margin-left:5;margin-right: auto;margin-top: 30">
				<div class="jumbotron jumbotron-fluid"> 

					<h3 style="margin-left: 10"> Departments </h3>
					<ul>
						<!--<li><a href="#"> Agricultural Communication </a></li>
						<li><a href="#"> Agrometerology</a></li>
						<li><a href="#"> Entomology </a></li>
						<li><a href="#"> Genetics and Plant Breeding </a></li>
						<li><a href="#"> Plant Pathology </a></li>
						<li><a href="#"> Vegetable Science </a></li>
						<li><a href="#"> Agricultural Economics </a></li>
						<li><a href="#"> Agronomy</a></li>
						<li><a href="#"> Food Science and Technology </a></li>
						<li><a href="#"> Horticulture </a></li>
						<li><a href="#"> Soil Science </a></li>-->

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
					</ul>

				</div>
			</div>
	</div>

</div>

</body>