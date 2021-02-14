<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Main section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
		
		
<!-- Left Sidebar -->

<section class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" style="background-color:RGB(245,245,245);">
			<div class="row">
				<div class="col-sm-2 col-md-2" id="left-sidebar"  style="margin-top:1%">
					
				<!-- Accordian left-sidebar  starts -->
				<div class="card">
					<img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/img/ajeet_sir.jpg" style="height: 200px;width: 200px">
				  	<div class="card-body">
				  		<div class="text-center">
				  			<h5 class="card-title"><b><?php echo $details[0]['Name']; ?> <!--Ajeet Singh Nain--></b></h5>
							<p class="card-text"> <b> <?php echo $details[0]['Designation']; ?> </b> </p>
							<p class="card-text"> <b> B.Sc, M.Sc, Phd </b> </p>
				  		</div>
				  		<ul class="list-group">
							<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty">Profile</a></li>
							<li class="list-group-item"><a href="#">Courses</a></li>
							<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fpublications">Publications</a></li>
							<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fresearch">Research</a></li>
							<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fmeetings">Meetings & Conferences</a></li>
				   			
				   			<?php
				   				if(($this->session->userdata('logged_in') == 'true') && $this->session->userdata('role') == 3) {  //  only HOD can add Staff, Role of HOD=3
									?>
									<li class="list-group-item"><a href="<?php echo site_url('faculty/add_staff'); ?>">Add Staff</a></li>
									<!--  Can be updated to department/add_staff as staff is of dept. and not of particular faculty -->
									<li class="list-group-item"><a href="<?php echo site_url('department/update_dept_info'); ?>">Dept. Info.</a></li>
								<?php }
								else if(($this->session->userdata('logged_in') == 'true') && $this->session->userdata('role') == 2) {  //  only Dean can update Head of any Department and UG Students, Role of Dean=2
									?>
									<li class="list-group-item"><a href="<?php echo site_url('department/add_student'); ?>">Add Students</a></li>
									<li class="list-group-item"><a href="<?php echo site_url('department/update_hod'); ?>">Update HOD</a></li>
								<?php }
							?>
						</ul>
					</div>
				</div>
				<!-- Accordian ends -->
			</div>


			<!-- Main carousels Section -->
			<div class="col-md-9" id="main-section" style="padding:1%">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/faculty">Profile</a></li>
								<li class="breadcrumb-item active" aria-current="page">Courses</li>
							</ol>
						</nav>

						<div class="topslider">
							<div class="col-md-11 text-justify" style="margin-left:3%;padding-bottom:2%;">
								<div class="separator"></div>
								<h3 contenteditable="true"><b>Dr A.S. Nain</b></h3>
								<div class="separator"></div>
								<h4><b>Courses </b></h4>
								<span>
									<ul>
										<li contenteditable="true">course 1 </li>
										<li>course 2 </li>
										<li>course 3 </li>
										<li>course 4 </li>
									</ul>
								</span>

							</div>
						</div> <!-- end of topslider div -->
					</div>

				</div>
			</div>
			<!-- Main carousel section ends -->
		</div>

		</div>
	</div>
</section>