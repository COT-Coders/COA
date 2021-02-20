<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Main section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
			
		
<!-- Left Sidebar -->
<?php
	function modal_edit()
	{
		if($this->session->userdata('logged_in')) ?>
			<a href="#" data-toggle="modal" data-target="#editProfileSummary" style="float:right">Edit</a>
		<?php
	}
?>

<section class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" style="background-color:RGB(245,245,245);">
			<div class="row">
				<div class="col-sm-2 col-md-2" id="left-sidebar" style="margin-top:1%">
					
					<!-- Accordian left-sidebar  starts -->
					<div class="card" >
						<img class="card-img-top img-responsive" src="<?php echo base_url().'assets/images/faculty/fac_'.$details[0]['Faculty_ID'].'.jpg'; ?>" style="height: 200px;width: 200px">
						<div class="card-body">
							<div style="margin-left: 30;margin-right: 30">
								<h5 class="card-title"><b><?php echo $details[0]['Name']; ?></b></h5>
								<p class="card-text"> <b> <?php echo $details[0]['Designation']; ?> </b> </p>
								<p class="card-text"> <b> B.Sc, M.Sc, Phd </b> </p>
							</div>
							
							<?php if($this->session->userdata('logged_in') == 'true') { ?>
							<ul class="list-group">
								<li class="list-group-item"><a href="#">Profile</a></li>
								<!--<li class="list-group-item active"><a href="#">Profile</a></li>-->
								<li class="list-group-item"><a href="<?php echo site_url('faculty/fcourses'); ?>">Courses</a></li>
								<li class="list-group-item"><a href="<?php echo site_url('faculty/fpublications'); ?>">Add Publications</a></li>
								<li class="list-group-item"><a href="<?php echo site_url('faculty/fresearch'); ?>">Research</a></li>
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
				<div class=" col-sm-9 col-md-9" id="main-section" style="padding:1%">
					<div class="row">
						<div class=" col-sm-11 col-md-11">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page"><h4>Profile</h4></li>
							</ol>
						</nav>

						<div class="topslider">
							<div class="col-sm-9 col-md-9 text-justify" style="margin-left:3%;padding-bottom:2%;">
								<div class="separator"></div>
								<h3><b><?php echo $details[0]['Name']; ?> <!--Dr A.S. Nain--></b></h3>
								<div class="separator"></div>


								<div class="row">
									<div class="col-md-10 col-sm-10 col-xs-10"><h4 style="margin-top: 1px"><b>About the faculty</b></h4> </div>
									<div class="col-md-2 col-sm-2 col-xs-2">
									<!--	<button type="button"class="btn btn-info h5-size" data-toggle="modal" data-target="#myModalHorizontal" style="float:right;margin-bottom:5px">Edit
										</button>-->
									<?php if($this->session->userdata('logged_in')) { ?>
									<a href="#" data-toggle="modal" data-target="#editProfileSummary" style="float:right">Edit</a>
									<?php } ?>
									</div>
								</div>

								<span>Dr A.S. Nain completed his PhD from Indian Space Research Organization (ISRO), India in the year 2002 and worked as 
								Visiting Scientist / postdoctoral fellow in ZALF (Leibniz), Muncheberg, Germany from 2003 to 2005. He is currently holding 
								prestigious NABARD-Chair and Head, Department of Agrometeorology, GB Pant University of Agriculture and Technology. Prior to 
								present engagement he had served Indira Gandhi Agricultural University for five years. He has published more than 100 papers in 
								reputed journals and has been serving as associate editor/ editorial board member of reputed journals. He has to his credit many 
								prestegeous awards viz Young Scientist Awards (twice), Dr BB Singh Research Excellence Award, Faculty Excellence Award (twice) etc. 
										
								</span>
							    <br></br>
								<!--<h4><b>Contact Details</b></h4>-->
								<div class="row">
									<div class="col-md-10 col-sm-10 col-xs-10"><h4 style="margin-top: 1px"><b>Contact Details</b></h4> </div>
									<div class="col-md-2 col-sm-2 col-xs-2">
									<!--	<button type="button"class="btn btn-info h5-size" data-toggle="modal" data-target="#myModalHorizontal" style="float:right;margin-bottom:5px">Edit
										</button>-->
									<?php if($this->session->userdata('logged_in')) { ?>
									<a href="#" data-toggle="modal" data-target="#editContactDetails" style="float:right">Edit</a>
									<?php } ?>
									</div>
								</div>
								<span>
									<p>Head Department of Agrometeorology</p>
									<p>College of Agriculture</p>
									<p>G B Pant University, Pantnagar</p>
									<p> <?php if($details[0]['Address']) { echo $details[0]['Address']; } else { echo "Not provided"; } ?> </p>
									<p> Email : <span class="text-danger"><?php if($details[0]['Email']) { echo $details[0]['Email']; } else { echo "Not provided"; } ?> <!--abc@gmail.com--></span></p>
									<p> Office Phone : <span class="text-danger"><?php if($details[0]['Office_Contact']) { echo $details[0]['Office_Contact']; } else { echo "Not provided"; } ?> <!--911--></span></p>
									<p> Personal Phone : <span class="text-danger"><?php if($details[0]['Personal_Contact']) { echo $details[0]['Personal_Contact']; } else { echo "Not provided"; } ?> <!--911--></span></p>
								</span>

								<br></br>
								<!--<h4><b>Membership details</b></h4>-->
								<div id="Membership">
									<div class="row">
										<div class="col-md-10 col-sm-10 col-xs-10"><h4 style="margin-top: 1px"><b>Membership details</b></h4> </div>
										<div class="col-md-2 col-sm-2 col-xs-2">
										<!--	<button type="button"class="btn btn-info h5-size" data-toggle="modal" data-target="#myModalHorizontal" style="float:right;margin-bottom:5px">Edit
											</button>-->
										<?php if($this->session->userdata('logged_in')) { ?>
										<a href="#" data-toggle="modal" data-target="#addMembership" style="float:right;margin-right: 10%">Add</a>
										 	<?php } ?>
										</div>
									</div>
									<span>
										<ul>  
											
												<div class="row"><li>
													<div class="col-md-10 col-sm-10 col-xs-10">
														<b>Member of Institute of Electrical and Electronics Engineers (IEEE)</b>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-2">
														<?php if($this->session->userdata('logged_in')) { ?>
														<a href="#" data-toggle="modal" data-target="#editMembership" style="float:right;margin-right: 10%">Edit</a>
														<?php } ?>
													</div></li>
												</div>
											
												<div class="row"><li>
													<div class="col-md-10 col-sm-10 col-xs-10">
														<b>Member of Institute of Electrical and Electronics Engineers (IEEE)</b>
													</div>
													<?php if($this->session->userdata('logged_in')) { ?>
													<div class="col-md-2 col-sm-2 col-xs-2">
														<a href="#" data-toggle="modal" data-target="#editMembership" style="float:right;margin-right: 10%">Edit</a>
													</div> <?php } ?> </li>
												</div>
										</ul>
									</span>
								</div>

								<br></br>
								<!--<h4><b>Personal details</b></h4>-->
								<div id="Education">
									<div class="row">
										<div class="col-md-10 col-sm-10 col-xs-10"><h4 style="margin-top: 1px;"><b>Educational Experience</b></h4> </div>
										<div class="col-md-2 col-sm-2 col-xs-2">
										<!--	<button type="button"class="btn btn-info h5-size" data-toggle="modal" data-target="#myModalHorizontal" style="float:right;margin-bottom:5px">Edit
											</button>-->
										<? modal_edit(); ?>
										<?php if($this->session->userdata('logged_in')) { ?>
										<a href="#" data-toggle="modal" data-target="#addEducation" style="float:right;margin-right: 10%">Add</a>
										<?php } ?>
										</div>
									</div>
										<div class="table-responsive">          
											<table class="table">
												<thead>
													<tr><th>Year</th><th>Degree</th><th>Description</th><th></th></tr>
												</thead>
												<tbody>
													<tr>
														<td>1914-1918</td>
														<td> Black Ops</td>
														<td>Defeated Germans in world war</td>
														<?php if($this->session->userdata('logged_in')) { ?>
														<td ><a href="#" data-toggle="modal" data-target="#editEducation" style="float: right;">Edit</a></td>
														<?php } ?>
													</tr>
													<tr>
														<td>1914-1918</td>
														<td> Black Ops</td>
														<td>Defeated Germans in world war</td>
														<?php if($this->session->userdata('logged_in')) { ?>
														<td ><a href="#" data-toggle="modal" data-target="#editEducation" style="float: right;">Edit</a></td>
														<?php } ?>
													</tr>
													<tr>
														<td>1914-1918</td>
														<td> Black Ops</td>
														<td>Defeated Germans in world war</td>
														<?php if($this->session->userdata('logged_in')) { ?>
														<td ><a href="#" data-toggle="modal" data-target="#editEducation" style="float: right;">Edit</a></td>
														<?php } ?>
													</tr>
											</table>
										</div>
									</span>
							    </div>
							    <br></br>

								<!--<h4><b>Professional Experience</b></h4>-->
								<div id="Professional">
									<div class="row">
										<div class="col-md-10 col-sm-10 col-xs-10"><h4 style="margin-top: 1px"><b>Professional Experience</b></h4> </div>
										<div class="col-md-2 col-sm-2 col-xs-2">
										<!--	<button type="button"class="btn btn-info h5-size" data-toggle="modal" data-target="#myModalHorizontal" style="float:right;margin-bottom:5px">Edit
											</button>-->
										<?php if($this->session->userdata('logged_in')) { ?>
										<a href="#" data-toggle="modal" data-target="#addProfessional" style="float:right;margin-right:10%">Add</a>
										<?php } ?>
										</div>
									</div>
									<span> 
									<div class="table-responsive">          
										<table class="table">
											<thead>
												<tr><th>Year</th><th>Experience</th><th>Description</th><th></th></tr>
											</thead>
											<tbody>
												<tr>
													<td>1914-1918</td>
													<td> Black Ops</td>
													<td>Defeated Germans in world war</td>
													<?php if($this->session->userdata('logged_in')) { ?>
													<td ><a href="#" data-toggle="modal" data-target="#editProfessional" style="float: right;">Edit</a></td>
													<?php } ?>
												</tr>
												<tr>
													<td>1914-1918</td>
													<td> Black Ops</td>
													<td>Defeated Germans in world war</td>
													<?php if($this->session->userdata('logged_in')) { ?>
													<td ><a href="#" data-toggle="modal" data-target="#editProfessional" style="float: right;">Edit</a></td>
													<?php } ?>
												</tr>
												<tr>
													<td>1914-1918</td>
													<td> Black Ops</td>
													<td>Defeated Germans in world war</td>
													<?php if($this->session->userdata('logged_in')) { ?>
													<td ><a href="#" data-toggle="modal" data-target="#editProfessional" style="float: right;">Edit</a></td>
													<?php } ?>
												</tr>
											</tbody>
										</table>
									</div>
									</span>
							    </div>

								<!--<h4><b>Administrative Experience</b></h4>-->
								<div id="Administrative">
									<div class="row">
										<div class="col-md-10 col-sm-10 col-xs-10"><h4 style="margin-top: 1px"><b>Administrative Experience</b></h4> </div>
										<div class="col-md-2 col-sm-2 col-xs-2">
										<!--	<button type="button"class="btn btn-info h5-size" data-toggle="modal" data-target="#myModalHorizontal" style="float:right;margin-bottom:5px">Edit
											</button>-->
										<?php if($this->session->userdata('logged_in')) { ?>
										<a href="#" data-toggle="modal" data-target="#addAdministrative" style="float:right;margin-right:10%">Add</a>
										<?php } ?>
										</div>
									</div>
									<span>
									<div class="table-responsive">          
										<table class="table">
											<thead>
												<tr><th>Year</th><th>Experience</th><th>Description</th><th></th></tr>
											</thead>
											<tbody>
													<tr>
														<td>1914-1918</td>
														<td> Black Ops</td>
														<td>Defeated Germans in world war</td>
														<?php if($this->session->userdata('logged_in')) { ?>
														<td ><a href="#" data-toggle="modal" data-target="#editAdministrative" style="float: right;">Edit</a></td>
														<?php } ?>
													</tr>
													<tr>
														<td>1914-1918</td>
														<td> Black Ops</td>
														<td>Defeated Germans in world war</td>
														<?php if($this->session->userdata('logged_in')) { ?>
														<td ><a href="#" data-toggle="modal" data-target="#editAdministrative" style="float: right;">Edit</a></td>
														<?php } ?>
													</tr>
													<tr>
														<td>1914-1918</td>
														<td> Black Ops</td>
														<td>Defeated Germans in world war</td>
														<?php if($this->session->userdata('logged_in')) { ?>
														<td ><a href="#" data-toggle="modal" data-target="#editAdministrative" style="float: right;">Edit</a></td>
														<?php } ?>
													</tr>
												
											</tbody>
										</table>
									</div>
									</span>
								</div>
							</div>
						</div>  <!-- end of topslider -->
						</div>
					</div>
				</div>  <!-- Main carousel ends -->
			
			</div>
		</div>
	</div>
</section>

<!-- modals for Edit and update operations -- >

<!-- 1) Modal for editing faculty summary -->


<div class="modal fade" id="editProfileSummary" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Edit Summary
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-2 control-label" for="Abstract">About the Faulty</label>
		                    <div class="col-sm-10">
		                    	<textarea  class="md-textarea form-control" rows="15" placeholder="About yourself"></textarea>
		                    </div>

		                  </div>
		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>	


<!-- 2) Modal for editing contact details -->


<div class="modal fade" id="editContactDetails" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Edit Contact Details
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		                  
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="addresss1">Address line 1</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Address line 1"/>
		                    </div>

		                  </div>
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="addresss2">Address line 2</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Title"/>
		                    </div>

		                  </div>
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="addresss3">Address line 3</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Title"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="addresss3">Email</label>
		                    <div class="col-sm-9">
		                        <input type="email" class=" form-control" placeholder="Title"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Office Phone">Office Phone</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="05964-123456"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Personal Phone">Personal Phone</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="9411xxxxx"/>
		                    </div>

		                  </div>
		                  <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-9">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>			          


<!-- 3) Modal for adding Membership details summary -->


<div class="modal fade" id="addMembership" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Edit Membership
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Membership">Membership</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Membership"/>
		                    </div>

		                  </div>
		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>	

<!-- 4) Modal for editing Membership details summary -->


<div class="modal fade" id="editMembership" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Edit Membership
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Membership">Membership</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Membership"/>
		                    </div>

		                  </div>
		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>	

<!-- 5) Modal for adding Educational details summary -->
<div class="modal fade" id="addEducation" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Add Educational Experience
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Year">Year</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="19xx-19xx"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Degree">Degree</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Degree"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Description">Description</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Description"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>

<!-- 6) Modal for editing Educational details summary -->
<div class="modal fade" id="editEducation" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Edit Educational Experience
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Year">Year</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="19xx-19xx"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Degree">Degree</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Degree"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Description">Description</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Description"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>

<!-- 7) Modal for adding Professional details summary -->
<div class="modal fade" id="addProfessional" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Add Professional Experience
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Year">Year</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="19xx-19xx"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Degree">Degree</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Degree"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Description">Description</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Description"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>

<!-- 8) Modal for editing Professional details summary -->
<div class="modal fade" id="editProfessional" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Edit Professional Experience
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Year">Year</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="19xx-19xx"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Degree">Degree</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Degree"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Description">Description</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Description"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>


<!-- 9) Modal for adding Administrative details summary -->
<div class="modal fade" id="addAdministrative" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Add Administrative Experience
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Year">Year</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="19xx-19xx"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Degree">Degree</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Degree"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Description">Description</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Description"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>

<!-- 10) Modal for editing Professional details summary -->
<div class="modal fade" id="editAdministrative" tabindex="-1" role="dialog" 
		     aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <!-- Modal Header -->
		            <div class="modal-header">
		                <button type="button" class="close" 
		                   data-dismiss="modal">
		                       <span aria-hidden="true">&times;</span>
		                       <span class="sr-only">Close</span>
		                </button>
		                <h4 class="modal-title" id="myModalLabel">
		                    Edit Administrative Experience
		                </h4>
		            </div>
		            
		            <!-- Modal Body -->
		            <div class="modal-body">
		                
		                <form class="form-horizontal" role="form">
		             
		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Year">Year</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="19xx-19xx"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Degree">Degree</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Degree"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <label  class="col-sm-3 control-label" for="Description">Description</label>
		                    <div class="col-sm-9">
		                        <input type="text" class=" form-control" placeholder="Description"/>
		                    </div>

		                  </div>

		                  <div class="form-group">
		                    <div class="col-sm-offset-2 col-sm-10">
		                      <button type="submit" class="btn btn-default">Submit</button>
		                    </div>
		                  </div>
		                </form>
		            </div>
		            
					           
			    </div>
			</div>
		</div>