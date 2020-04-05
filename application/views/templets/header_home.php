<head>
	<!--
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom_nav.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/footer.css">
	

	<script src="<?php echo base_url();?>/assets/js/js/custom_nav.js"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	<div class="container">
		  <!-- Brand -->
		  <!--
		  <a class="navbar-brand" href="#">

			<span ><img src="<?php echo base_url();?>assets/img/pantnagar_logo.png" alt="GBPUAT Pantnagar" width="100" height="100">
			</span> <span><h3>College Of Agriculture</h3></span>
		  </a>
		-->

		<span style="padding-bottom: 10px; padding-top: 10px"><img src="<?php echo base_url();?>assets/img/pantnagar_logo.png" alt="GBPUAT Pantnagar" width="100" height="100"></span>
		<span><h3 style="color:white; padding-left:10px">College Of Agriculture</h3></span>
	

		  <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		  </button>

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
	            	<li class="dropdown-item"><a href="#">Link 1</a></li>
	            	<li class="dropdown-item"><a href="#">Link 2</a></li>
	            	<li class="dropdown-submenu"> <a class="dropdown-item dropdown-toggle" href="#">Link 3</a>
	            		<ul>
	            			<?php
	            				$no_of_dept = count($dept_names);
	            				for($i=0; $i<$no_of_dept; $i++) { ?>
	            					<a class="dropdown-item" href="<?php echo site_url("department/desc/".$i); ?>" > <?php echo $dept_names[$i]['Dept_Name']; ?> </a> <?php
	            				}
	            			?>
	            		</ul>
	            	</li>
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
		        <a class="nav-link" href="#">Activities</a>
		      </li>

		    </ul>
		  </div>
	</div>
</nav>

<div class="banner">
	<div class="container">
	<div class="banner-text">
	<div class="banner-heading">
	<!--Glad to see you here !-->
	</div>
	<div class="banner-sub-heading">
	<!--Here goes the secondary heading on hero banner-->
	</div>
	<!--<button type="button" class="btn btn-warning text-dark btn-banner">Get started</button>-->
	</div>
	</div>
</div>
<section id="about">
<div class="container">
	<div class="text-intro">
	<h2>Sample Title</h2>
		<p > The College of Agriculture, Pantnagar, India, is a constituent of Govind Ballabh Pant University of Agriculture & Technology, Pantnagar. It was opened on 17 November 1960 when Jawaharlal Nehru, the first Prime Minister of India, inaugurated the university. It has a triple mandate of teaching, research and extension.

The college has more than 200 faculty members engaged in agricultural sciences. The college has played a role in the Green Revolution in the country. More than 185 varieties of crops like cereals, pulses, oilseeds, forages, fruits and vegetables, etc. have been released. The 4 year Bachelor of Science in Agriculture (BScAg) is the flagship course of the college.
</p>
<hr class="mt-5 mb-5" style="height:10;box-shadow: 0 10px 10px -10px #8c8b8b inset;">
	</div>
</div>

</section>
