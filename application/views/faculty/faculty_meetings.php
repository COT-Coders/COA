<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Main section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
			
		
<!-- Left Sidebar -->

<section class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" style="background-color:RGB(245,245,245);">
			<div class="row">
				<div class="col-sm-2 col-md-2" id="left-sidebar" style="margin-top:1%">
							
					<!-- Accordian left-sidebar  starts -->
					<div class="card">
						<img class="card-img-top img-responsive" src="<?php echo base_url().'assets/images/faculty/fac_'.$details[0]['Faculty_ID'].'.jpg'; ?>" style="height: 200px;width: 200px">
						<div class="card-body">
							<div class="text-center">
								<h5 class="card-title"><b><?php echo $details[0]['Name']; ?> <!--Ajeet Singh Nain--></b></h5>
								<p class="card-text"> <b> <?php echo $details[0]['Designation']; ?> </b> </p>
								<p class="card-text"> <b> B.Sc, M.Sc, Phd </b> </p>
							</div>
							
							<ul class="list-group">
								<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty">Profile</a></li>
								<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fcourses">Courses</a></li>
								<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fresearch">Research</a></li>
								<li class="list-group-item"><a href="#">Meetings & Conferences</li>
								<li class="list-group-item"><a href="<?php echo site_url('faculty/fpublications'); ?>">Publications</a></li>

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
						</div>  <!-- End of card body div -->
					</div>  <!-- End of card div -->
					<!-- Accordian ends -->
				</div>


				<!-- Main carousels Section -->
				<div class="col-md-9" id="main-section" style="padding:1%">
					<div class="row">
						<div class="col-md-12">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/faculty/index/">Profile</a></li>
									<li class="breadcrumb-item active" aria-current="page">Meetings</li>
								</ol>
							</nav>

							<div class="topslider">
								<div class="col-md-11 text-justify" style="margin-left:3%;padding-bottom:2%;">
									<div class="separator"></div>
									<div class="row">
										<div class="col-md-10 col-sm-10 col-xs-10">
											<h3 style="margin-top: 1px"><b><?php echo $details[0]['Name']; ?></b></h3>
										</div>

										<?php if($this->session->userdata('logged_in') == 'true') { ?>
											<div class="col-md-2 col-sm-2 col-xs-2">
												<button type="button"class="btn btn-info h3-size" data-toggle="modal" data-target="#myModalHorizontal" style="float:right;margin-top: 1px">
													Add new
												</button>
											</div>
										<?php } ?>
									</div>

									<div class="separator"></div>
									<h4><b>Meetings and Conferences</b></h4>
									<span>
										<ul>
											<li>Hitler Kaise mara gaya </li>
											<li>Hitler Kaise mara gaya </li>
											<li>Hitler Kaise mara gaya </li>
											<li>Hitler Kaise mara gaya </li>
										</ul>
									</span>
								</div>
							</div>  <!-- end of topslider div -->

						</div>
					</div>
				</div>
				<!-- Main carousels Section ends -->

				<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title" id="myModalLabel"> New Conference </h4>
							</div>
								
							<!-- Modal Body -->
							<div class="modal-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="inputEmail3">Title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Title"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="Publication">Publication</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Publication Name"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="Date">Date</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" placeholder="Date"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="Abstract">Abstract</label>
										<div class="col-sm-10">
											<textarea class="md-textarea form-control" rows="3" placeholder="Abstract"></textarea>
										</div>
									</div>

									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-default">Submit</button>
										</div>
									</div>
								</form>
							</div>  <!-- Modal body div ends -->
						</div>  <!-- Modal content ends -->
					</div>
				</div>
				 
			</div>
		</div>
	</div>
</section>