<head>
	<!--
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!--<style>
		#more {display: none;}
	</style> -->


	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom_nav.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/footer_new.css">

	

	<!------ Include the above in your HEAD tag ---------->
</head>
<nav class="navbar navbar-expand-md navbar-dark shrink">
	<div class="container">
		

	<span style="padding-bottom: 10px; padding-top: 10px"><img src="<?php echo base_url();?>assets/img/pantnagar_logo.png" alt="GBPUAT Pantnagar" width="100" height="100"></span>
	<span><h3 style="color:white; padding-left:10px">College Of Agriculture</h3></span>
	

	 

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav ml-auto">   
			<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url(); ?>/Welcome">Home</a>
			</li>
			<li class="nav-item">
			<a  class="nav-link" href="<?php echo site_url(); ?>/Welcome/about">About Us</a>
			</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Academics</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item"><a href="<?php echo site_url(); ?>/Welcome/departments_list" style="text-decoration: none;">Departments</a></li>
							<li class="dropdown-item"><a href="<?php echo site_url(); ?>/Welcome/programs">Programs of Study</a></li>
							<li class="dropdown-item"><a href="#">Link 2</a></li>
						</ul>
					</li>
					
					
				 <!-- Dropdown -->

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Centers</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url(); ?>/Welcome/college_activities">Activities</a>
					</li> 

				</ul>
			</div>
	</div>
</nav>

