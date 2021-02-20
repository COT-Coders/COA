<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Main section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/more.js"></script>
		
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
							<div style="margin-left: 30;margin-right: 30">
								<h5 class="card-title"><b><?php echo $details[0]['Name']; ?></b></h5>
								<p class="card-text"> <b><?php echo $details[0]['Designation']; ?></b> </p>
								<p class="card-text"> <b> B.Sc, M.Sc, Phd </b> </p>
							</div>
						
							<ul class="list-group">
								<li class="list-group-item"><a href="<?php echo site_url('faculty'); ?>">Profile</a></li>
								<li class="list-group-item"><a href="<?php echo site_url('faculty/fcourses'); ?>">Courses</a></li>
								<li class="list-group-item"><a href="#">Add Publications</a></li>
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
								<li class="breadcrumb-item active" aria-current="page">Publications</li>
							</ol>
						</nav>

						<div class="topslider">	
							<div class="col-md-11 text-justify" style="margin-left:3%;padding-bottom:1%;">
								<div class="separator"></div>

								<div class="row">
									<div class="col-md-10 col-sm-10 col-xs-10"><h3 style="margin-top: 1px"><b><?php echo $details[0]['Name']; ?></b></h3> </div>
									<div class="col-md-2 col-sm-2 col-xs-2">
										<button type="button"class="btn btn-info h3-size" data-toggle="modal" data-target="#add_pub_modal" style="float:right;margin-top: 1px">
											Add new
										</button>
									</div>
								</div>

								
								<div class="separator"></div>
								<h4><b>Publications </b></h4>

								<span>
									<ol>
										<li>Dr A S Nain, How to Kill Hitler, 1945, World War 2 pulblication house,</li>
										<li>Dr A S Nain, How to Kill Hitler, 1945, World War 2 pulblication house,</li>
										<li>Dr A S Nain, How to Kill Hitler, 1945, World War 2 pulblication house,</li>
										<li>Dr A S Nain, How to Kill Hitler, 1945, World War 2 pulblication house,</li>
										<li>Dr A S Nain, How to Kill Hitler, 1945, World War 2 pulblication house,</li>

										<?php
											$count = count($pub_info);
											for($i=0; $i<$count; $i++) {
												?><li><?php echo $pub_info[$i][0]['Title']; ?></li>
											<?php }
										?>
									</ol>
								</span>
							</div>
						</div> <!-- end of topslider -->
						</div>
					</div>



		<!-- Modal -->
		<div class="modal fade" id="add_pub_modal" tabindex="-1" role="dialog" 
		aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel"> New Publication </h4>
					</div>
					
					<!-- Modal Body -->
					<div class="modal-body">
						<!-- <form class="form-horizontal" role="form"> -->
						<?php
							$attributes = array("class" => "form-horizontal", "role" => "form", "name" => "add_pub_form", "id" => "add_pub_form");
							echo form_open('faculty/add_publication', $attributes);
							?>

							<div id="alert-msg"></div>
							<div class="form-group">
								<label  class="col-sm-2 control-label" for="Title">Title</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="pub_title" name="pub_title" placeholder="Title" value="<?php echo set_value('pub_title'); ?>" required/>
								</div>
							</div>
							
							<div class="form-group">
								<label  class="col-sm-2 control-label" for="Publication">Publication</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="pub_name" name="pub_name" placeholder="Publication Name" value="<?php echo set_value('pub_name'); ?>" required/>
								</div>
							</div>

							<div class="form-group">
								<label  class="col-sm-2 control-label" for="Date">Date</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" id="pub_date" name="pub_date" placeholder="Date" value="<?php echo set_value('pub_date'); ?>" required/>
								</div>
							</div>

							<div class="form-group">
								<label  class="col-sm-2 control-label" for="Abstract">Abstract</label>
								<div class="col-sm-10">
									<textarea  class="md-textarea form-control" rows="3" id="pub_abs" name="pub_abs" placeholder="Abstract" value="<?php echo set_value('pub_abs'); ?>" required></textarea>
								</div>
							</div>
						
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
							  		<!--<button class="btn btn-default" id="add_publication" name="add_publication">Submit</button>-->
							  		<button type="submit" class="btn btn-default" id="add_publication" name="add_publication">Submit</button>
								</div>
						  	</div>
						<!-- </form> -->
						<?php echo form_close(); ?>
					</div>
					<!-- modal body ends -->
							   
				</div>
				<!-- modal content ends -->
			</div>
		</div>
		<!-- modal ends -->


		<!-- commwnted old form
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="margin-left: 6%">Add publication</button>
				  <div id="demo" class="collapse">
					<?php echo form_open('faculty/add_publication'); ?>
						<div class="fl_right">
							<?php echo validation_errors('<div class="error"><i class="fa fa-exclamation-triangle"></i>', '</div>'); ?>

							<input type="text" id="pub_title" name="pub_title" placeholder="Title" value="<?php echo set_value('pub_title'); ?>" required />
							<input type="text" id="pub_abs" name="pub_abs" placeholder="Abstract" value="<?php echo set_value('pub_desc'); ?>" required/>
							<input type="text" id="pub_name" name="pub_name" placeholder="Publication Name" value="<?php echo set_value('pub_name'); ?>" required/>
							<input type="date" id="pub_date" name="pub_date" placeholder="Date" value="<?php echo set_value('pub_date'); ?>" required/>
							<!--<input type="text" id="pub_link" name="pub_link" placeholder="Publication Link" value="<?php echo set_value('pub_link'); ?>" required/>

							<button type="submit" class="btn btn-primary">Add Publication</button>
						</div>
					<?php echo form_close(); ?>
				</div> -->

			</div> 

			
		
			</div>		   
		</div>
	</div>
</section>

<script type="text/javascript">
	//$('#add_publication').click(function() {
	$('#add_pub_form').on('submit', function(event) {
		event.preventDefault();
		var form_data = {
			pub_title: $('#pub_title').val(),
			pub_abs: $('#pub_abs').val(),
			pub_name: $('#pub_name').val(),
			pub_date: $('#pub_date').val()
		};
		//alert(json(form_data));

		$.ajax({
			url: "<?php echo site_url('faculty/add_publication'); ?>",
			type: 'POST',
			data: form_data,
			success: function(msg) {
				alert(msg);
				if ($.trim(msg) === 'Validated')  //  "Validated" is returned by faculty/add_publication function on valid credentials
				{
					"<?php
						$redirect_url = site_url('faculty/fpublications');
						echo $redirect_url;
					?>"
					$('#alert-msg').html('<div class="alert alert-success text-center">Publication Added</div>');
					window.location.href = "<?php echo $redirect_url; ?>";
				}
				else
					$('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
			}
		});
				
		return false;
	});
</script>