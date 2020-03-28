<!--  
 
Developed and Designed by :: Students of College of Technology,GBPUAT pantnagar

	2) Mayank Chaudhari
	3) Samaksh Garg



-->

<!DOCTYPE HTML>

<html>

<head>
	<title>&nbsp;&nbsp;<?php //echo $title; $title is getting some garbage value, socommenting ?>&nbsp;&nbsp;||&nbsp;&nbsp;College of Agriculture</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	
 
Developed and Designed by :: Students of College of Technology,GBPUAT pantnagar

	2) Mayank Chaudhari
	3) Samaksh Garg



-->

<!DOCTYPE HTML>

<html>

<head>
	<title>&nbsp;&nbsp;<?php echo $title;?>&nbsp;&nbsp;||&nbsp;&nbsp;College of Agriculture</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-sca
 
Developed and Designed by :: Students of College of Technology,GBPUAT pantnagar

	2) Mayank Chaudhari
	3) Samaksh Garg



-->

<!DOCTYPE HTML>

<html>

<head>
	<title>&nbsp;&nbsp;<?php echo $title;?>&nbsp;&nbsp;||&nbsp;&nbsp;College of Agriculture</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-sca
	
	<!-- For online usage -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Slab' rel='stylesheet' type='text/css'>
	
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
        <div class="row" >
            <div class="col-md-1"></div>
            <div class="col-md-10" id="header">
                <div class="row" style="width:98%">
                            
                    <div class="col-md-2 col-sm-2 col-xs-2 img-circle" id="logo" style="margin-left:0%;margin-top:1%;">
                            <img src="<?php echo base_url();?>assets/img/pantnagar_logo.png" alt="GBPUAT Pantnagar" width="100" height="100">
                            
                    </div>
                    
                    <div class="col-md-9 hidden-xs hidden-sm" id="title" style="margin-left:1.5%;margin-top:1.02%">
                        <div class="row">
                                <div class="col-md-6 university_link text-left">
                                    <h2><a href="http://www.gbpuat.ac.in" target="_blank">College Of Agriculture</a></h2> <?php //  change url of COA to this website only ?>
                                    <h4 style="margin-left:1%;"><a href="http://www.gbpuat.ac.in" target="_blank">G. B. Pant Universiity of Agriculture and Technology</a></h4>
                                </div>
                        </div>
                    </div>
                    
                    <!-- Line starts -->
                    <div class="col-md-9 col-xs-7 col-sm-7 hidden-md hidden-lg visible-sm-block visible-xs-block" id="title" style="margin-left:2%;">
                        <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-weight:bolder; text-align:center;">College of Agriculture</h3>
                                </div>
                            
                                <div class="col-md-12 university_link" style="text-align:center;">
                                    <h4><a href="http://www.gbpuat.ac.in" target="_blank">G.B.P.U.A&amp;T, Pantnagar</a></h4>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <hr>
                    </div>
                    <div class="col-md-9 hidden-xs hidden-sm" id="title" style="text-align:left;">
                        <div class="row">
                            <div class="col-md-12 university_link">
                                    <h1><a href="#" target="_blank"><?php if(!empty($records)) echo $records[0]->Dept_Name; ?></a></h1>
                            </div>
                                
                        </div>
                    </div> 
                    <!-- Line ends -->
          
      
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
                       <li><a href="<?php echo site_url(); ?>/department"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                       <li><a href="<?php echo site_url(); ?>/department/program"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>Programs</a></li>
                       <li><a href="<?php echo site_url(); ?>/department/faculty"><i class="fa fa-edit" aria-hidden="true"></i> Faculty</a></li>
                       <li><a href="<?php echo site_url(); ?>/department/staff"><i class="fa fa-reorder" aria-hidden="true"></i>Staff</a></li>
                       <li><a href="<?php echo site_url(); ?>/department/research"><i class="fa fa-question" aria-hidden="true"></i> Research</a></li>
                       <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Students</a></li>
                       <li><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i> Resources</a></li>
                       <li><a href="<?php echo site_url(); ?>/department/activities"><i class="fa fa-paper-plane" aria-hidden="true"></i> Activities</a></li>
                   
                    </ul>
                       
                    <ul class="nav navbar-nav navbar-right" style="font-weight:bolder;">
                    			<!-- Change according to user_logged_in to Logout link -->
                                  <li><a href="<?php echo site_url(); ?>/login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a></li>
                                  <li><a href="<?php echo site_url(); ?>/signup">SignUp</a></li>


                       </ul>
            
                </div>
            </div>
        </div>
    </header>

    
