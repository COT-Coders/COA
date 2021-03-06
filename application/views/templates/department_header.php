<!--

Developed and Designed by :: Students of College of Technology,GBPUAT pantnagar

	1) Mayank Chaudhari
	2) Samaksh Garg

-->

<!DOCTYPE HTML>

<html>

<head>
	<title>&nbsp;&nbsp;<?php //echo $title; $title is getting some garbage value, so commenting ?>&nbsp;&nbsp;||&nbsp;&nbsp;College of Agriculture</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	
	<!-- For online usage -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Slab' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<!-- For offline usage -->
	<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Slab' rel='stylesheet' type='text/css'>
	
	<script src="<?php echo base_url();?>/assets/js/jquery-1.11.1.min.js"></script>
			
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>-->
	
	<script src="<?php echo base_url();?>/assets/js/more.js"></script>

	<link rel="icon" href="<?php echo base_url();?>assets/img/logo.png">

</head>

<body id="body">

	<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Header section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

	<header class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10" id="header">
				
				<div class="row" style="width:98%">			
					<div class="col-md-2 col-sm-2 col-xs-2 img-circle hidden-sm hidden-xs visible-md-block visible-lg-block" id="logo" style="margin-left:0%;margin-top:1%;">
							<img src="<?php echo base_url();?>assets/img/pantnagar_logo.png" alt="GBPUAT Pantnagar" width="100" height="100">			
					</div>
					
					<div class="col-md-9 hidden-xs hidden-sm" id="title" style="margin-left:1.5%;margin-top:1.02%">
						<div class="row">
							<div class="col-md-6 university_link text-left">
								<h2  style="padding-left:10px"><a href="<?php echo site_url(); ?>" target="_blank">College Of Agriculture</a></h2>
								<h4 style="padding-left:10px"><a href="http://www.gbpuat.ac.in" target="_blank">G. B. Pant University of Agriculture and Technology</a></h4>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row" style="width:98%">	
					<!-- Line starts -->
					<div class="col-md-9 col-xs-7 col-sm-7 hidden-md hidden-lg visible-sm-block visible-xs-block" id="title" style="margin-left:2%;">
						<div class="row">
							<div class="col-sm-1 col-xs-1"></div>
							<div class="col-sm-2 col-xs-2 img-circle" id="logo" style="margin-top:1%;">
								<img src="<?php echo base_url();?>assets/img/pantnagar_logo.png" alt="GBPUAT Pantnagar">			
							</div>
							<div class="col-sm-3 col-xs-3"></div>
							<div class="col-sm-4 col-xs-4" style="margin-left: 20px;padding-left: 10px"> 
								<div class="row">
									<h3 style="font-weight:bolder;"><a href="<?php echo site_url(); ?>" target="_blank">College of Agriculture</a></h3>
								</div>
								<!--<div class="row">
									<div class="col-sm-12 col-xs-12 university_link">
											<h4><a href="http://www.gbpuat.ac.in" target="_blank">G.B.P.U.A&amp;T, Pantnagar</a></h4>
									</div>
								</div>-->
							</div>	
						</div>
					</div>

					<div class="col-md-12 col-lg-12 hidden-sm hidden-xs visible-md-block visible-lg-block">
						<hr>
					</div>
					<div class="col-md-9 hidden-xs hidden-sm" id="title" style="text-align:left;">
						<div class="row">
							<div class="col-md-12 university_link">
								<h1><?php if(!empty($records)) echo $records[0]['Dept_Name']; ?></h1>
							</div>	
						</div>
					</div> 
					<!-- Line ends -->
				</div>

				<div class="row">
					<div class="col-sm-12 col-xs-12  hidden-md hidden-lg visible-sm-block visible-xs-block university_link">
						<h4><a href="http://www.gbpuat.ac.in" target="_blank">G.B.P.U.A&amp;T, Pantnagar</a></h4>
					</div>
				</div>

			</div>
		</div>
						

		

		<!--   -=-=-=-=-=-=-=-=-=-=-=-=-=-  navigation Bar   -=-=-=-=-=-=-=-=-=-=-=-=-   -->
		<div class="row">
		<div class="col-md-1"></div>
			<div class="col-md-10 navbar navbar-custom" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse navbar-inverse-collapse">
					<ul class="nav navbar-nav navbar-main-menu" style="color:blue;font-weight:bolder;">
					   <li><a href="<?php echo site_url('department'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
					   <li><a href="<?php echo site_url('department/program'); ?>"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>Programs</a></li>
					   <li><a href="<?php echo site_url('department/faculty_list'); ?>"><i class="fa fa-edit" aria-hidden="true"></i> Faculty</a></li>
					   <li><a href="<?php echo site_url('department/staff'); ?>"><i class="fa fa-reorder" aria-hidden="true"></i>Staff</a></li>
					   <li><a href="<?php echo site_url('department/research'); ?>"><i class="fa fa-question" aria-hidden="true"></i> Research</a></li>
					   <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Students</a></li>
					   <li><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i> Resources</a></li>
					   <li><a href="<?php echo site_url('department/activities'); ?>"><i class="fa fa-paper-plane" aria-hidden="true"></i> Activities</a></li>
				   
					</ul>
					   
					<ul class="nav navbar-nav navbar-right" style="font-weight:bolder;">
						<!-- Change according to user_logged_in to Logout link -->
						<?php
							if( $this->session->userdata('logged_in') == 'true' ) { ?>
								<select class="form-control" id="prof_log_out" name="prof_log_out">
									<option> Select </option>
									<option value="<?php echo site_url('faculty'); ?>"> Profile </option>
									<option value="<?php echo site_url('logout'); ?>"> LogOut </option>
								</select>	
							<?php
							}
							else { ?>
								<!--<li><a href="<?php echo site_url('login'); ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login </a></li>-->
								<!--<li><a href="<?php echo site_url('signup'); ?>">SignUp</a></li>-->

								<!--- Code to implement a modal based login form -->

								<!--<li> <a><button type='button' class="label" data-toggle="modal" data-target="#popUpWindow" style="background-color:transparent;border: none;box-shadow: none;margin-top: 0px;margin-bottom: 0px;" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login </button></a> </li> -->

								<li><a data-toggle="modal" data-target="#popUpWindow"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login </a></li>

								<div class="modal fade" id="popUpWindow">
								    <div class="modal-dialog">
								      <div class="modal-content">

								      	<?php
								      		$url = site_url('login/form_check');
								      		$attributes = array("name" => "login_form", "id" => "login_form");
								      		echo form_open($url, $attributes);
								      	?>
								        <!-- header -->
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h3 class="modal-title">Login Form</h3>
								        </div>

								        <!-- body -->
								        <div class="modal-body">
								        	<div id="alert-msg"></div>
								            <div class="form-group">
								              <input type="text" id="user_email" name="user_email" class="form-control" placeholder="Email"/>
								            </div>
								            <div class="form-group">
								              <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
								            </div>
								        </div>
								        
								        <!-- footer -->
								        <div class="modal-footer">
								          <button class="btn btn-primary btn-block" id="login" name="login">Log In</button>
								        </div>
								        <?php echo form_close(); ?>
								      </div>
								    </div>
								  </div>

								 <?php
							} ?>
					</ul>
			
				</div>
			</div>
		</div>

		<script type="text/javascript">
			$('#login').click(function() {
				var form_data = {
					user_email: $('#user_email').val(),
					password: $('#password').val()
				};

				$.ajax({
					url: "<?php echo site_url('login/form_check'); ?>",
					type: 'POST',
					data: form_data,
					success: function(msg) {
						if ($.trim(msg) === 'Valid')  //  "Valid" is returned by login/form_check function on valid credentials
						{
							"<?php
								$redirect_url = site_url('faculty');
								echo $redirect_url;
							?>"
							$('#alert-msg').html('<div class="alert alert-success text-center">Valid credentials</div>');
							window.location.href = "<?php echo $redirect_url; ?>";
						}
						else if($.trim(msg) === 'Invalid')
							$('#alert-msg').html('<div class="alert alert-danger text-center">Invalid credentials. Please try again later.</div>');
						else
							$('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
					}
				});
				
				return false;
			});

			$("#prof_log_out").on("change", function() {
				location.href = this.value;
				//location.href = this.href;
			});
		</script>
	</header>
</body>
