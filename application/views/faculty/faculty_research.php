<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Main section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
		
<!-- Left Sidebar -->

<section class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" style="background-color:RGB(245,245,245);">
			<div class="row">
				<div class="col-md-2" id="left-sidebar"  style="margin-top:1%">
					
				<!-- Accordian left-sidebar  starts -->
				<div class="card">
					<img class="card-img-top img-responsive" src="<?php echo base_url().'assets/images/faculty/fac_'.$details[0]['Faculty_ID'].'.jpg'; ?>" style="height: 200px;width: 200px">
					<div class="card-body">
						<div class="text-center">
							<h5 class="card-title"><b><?php echo $details[0]['Name']; ?> <!--Ajeet Singh Nain--></b></h5>
							<p class="card-text"> <b> <?php echo $details[0]['Designation']; ?> </b> </p>
							<p class="card-text"> <b> B.Sc, M.Sc, Phd </b> </p>
						</div>

						<?php if($this->session->userdata('logged_in') == 'true') { ?>
						<ul class="list-group">
							<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty">Profile</a></li>
							<li class="list-group-item"><a href="<?php echo site_url('faculty/fcourses'); ?>">Courses</a></li>
							<li class="list-group-item"><a href="<?php echo site_url('faculty/fpublications'); ?>">Add Publications</a></li>
							<li class="list-group-item"><a href="#">Research</a></li>
							<li class="list-group-item"><a href="<?php echo site_url('faculty/fmeetings'); ?>">Meetings & Conferences</a></li>

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
						<?php } ?>
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
									<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/faculty/">Profile</a></li>
									<li class="breadcrumb-item active" aria-current="page">Research</li>
								</ol>
							</nav>

							<div class="topslider">							
							<div class="col-md-11 text-justify" style="margin-left:3%;padding-bottom:2%;">
								<div class="separator"></div>
								<h3><b>Dr A.S. Nain</b></h3>
								
								<div class="separator"></div>
								<h4><b>Research Interest </b></h4>
								<span>
									<ul>
										<li>course 1 </li>
										<li>course 2 </li>
										<li>course 3 </li>
										<li>course 4 </li>
									</ul>
								</span>

								<h4><b>Research Projects </b></h4>
								<span>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr><th>Title</th><th>Description</th><th>Duration</th><th>Status</th></tr>
											</thead>
											<tbody>
												<tr><td>Hitler ki Aatma ki Shanti</td><td> Prtform rituals to calm down the Bhatkti Hitler ki aatma</td><td>Till his rebirth</td><td>Open</td></tr>
												<tr><td>Hitler ki Aatma ki Shanti</td><td> Prtform rituals to calm down the Bhatkti Hitler ki aatma</td><td>Till his rebirth</td><td>Open</td></tr>
												<tr><td>Hitler ki Aatma ki Shanti</td><td> Prtform rituals to calm down the Bhatkti Hitler ki aatma</td><td>Till his rebirth</td><td>Open</td></tr>
												<tr><td>Hitler ki Aatma ki Shanti</td><td> Prtform rituals to calm down the Bhatkti Hitler ki aatma</td><td>Till his rebirth</td><td>Open</td></tr>
											</tbody>
										</table>
									</div>
								</span>
							</div>
							</div>  <!-- end of topslider -->
						</div>
					</div>  <!-- end of row div -->
				</div>  <!-- Main carousel section ends -->
			</div>
		</div>
		</div>
	</div>
</section>