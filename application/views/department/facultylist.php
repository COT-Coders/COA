<section class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8" style="background-color:RGB(245,245,245);">
			<div class="panel panel-primary">
				<div class="panel-heading">Faculty</div>
				<div class="panel-body">

				<div class="row">
					<div class="col-sm-3 col-md-3">
						<img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/img/ajeet_sir.jpg" style="height: 200px;width: 200px">
					</div>

					<div class="col-sm-9 col-md-9">
						<h3> <a>Ajeet Singh Nain</a>&nbsp<b>Head, Agrometeorology</b></h3>
						<table cellspacing="10"> 
							<tr><td width="140">Office</td><td></td> <td> B114 </td> </tr>
							<tr><td>Phone </td> <td></td><td> +91901234567890 </td></tr>
							<tr><td>Website</td><td></td><td><a href="<?php echo site_url(); ?>/faculty">Faculty Website </a></td></tr> 
							<tr><td>Email</td><td></td><td>abc@xyz.com</td></tr>
							<tr><td>Specialization</td><td></td><td>Agrometrology, Agriculture</td></tr>
							<tr><td width="140">Area of Interest</td><td></td><td>Agrometrology</td></tr>
						</table>						
					</div>
				</div>
			
				<hr style="border-top:dotted blue">

				<div class="row">
					<div class="col-sm-3 col-md-3">
						<img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/img/ajeet_sir.jpg" style="height: 200px;width: 200px">
					</div>
				   
					<div class="col-sm-9 col-md-9">
						<h3> <a>Ajeet Singh Nain</a>&nbsp<b>Head, Agrometeorology</b></h3>
						<table cellspacing="10"> 
							<tr><td width="140">Office</td><td></td> <td> B114 </td> </tr>
							<tr><td>Phone </td> <td></td><td> +91901234567890 </td></tr>
							<tr><td>Website</td><td></td><td><a href="<?php echo site_url(); ?>/faculty">Faculty Website </a></td></tr> 
							<tr><td>Email</td><td></td><td>abc@xyz.com</td></tr>
							<tr><td>Specialization</td><td></td><td>Agrometrology, Agriculture</td></tr>
							<tr><td width="140">Area of Interest</td><td></td><td>Agrometrology</td></tr>
						</table>						
					</div>
				</div>

				<hr style="border-top:dotted blue">

				<?php
					$no_of_fac = count($records);
					echo "No. of faculties(in view):".$no_of_fac;

					for($i=0; $i<$no_of_fac; $i++) {
						?>
						<div class="row">
							<div class="col-sm-3 col-md-3">
								<img class="card-img-top img-responsive" src="<?php echo base_url().'assets/images/faculty/fac_'.$records[$i]['Faculty_ID'].'.jpg'; ?>" style="height: 200px;width: 200px">
							</div>
				   
							<div class="col-sm-9 col-md-9">
								<h3> <a href="<?php echo site_url("faculty/desc/".$records[$i]['Faculty_ID']);  // echo $encoded_link; ?>"> <?php echo $records[$i]['Name']; ?> </a>&nbsp<b> <?php echo $records[$i]['Designation']; ?> </b> </h3>
								<table cellspacing="10"> 
									<tr> <td width="140"> Office </td> <td></td> <td> B114 </td> </tr>
									<tr> <td> Phone </td> <td></td> <td> <?php echo $records[$i]['Office_Contact']; ?> </td> </tr>
									<tr> <td> Website </td> <td></td> <td> <a href="<?php echo site_url(); ?>/faculty">Faculty Website </a> </td> </tr> 
									<tr> <td> Email </td> <td></td> <td> <?php echo $records[$i]['Email']; ?> </td> </tr>
									<tr> <td> Specialization </td> <td></td> <td> <?php echo $records[$i]['Specialization']; ?> </td> </tr>
									<tr> <td width="140"> Area of Interest </td> <td></td> <td> <?php echo $records[$i]['Interest_Area']; ?> </td> </tr>
								</table>						
							</div>
						</div>

						<hr style="border-top:dotted blue">
	            	<?php }
				?>
				
				</div>
			</div>
		</div>

		<!--- Right Side Bar for departent specific Information -->

		<div class="col-md-2" style="background-color:RGB(245,245,245);">
		<div class="panel panel-primary">
			<div class="panel-heading">Panel with panel-primary class</div>
			<div class="panel-body">
			<ul>
				<li> content 1 </li>
				<li> content 2 </li>
				<li> content 3 </li>
				<li> content 4 </li>
				<li> content 5 </li>
			</ul>
			</div>
		</div>

		</div>

	</div>
</section>