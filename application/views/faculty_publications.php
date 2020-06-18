


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Main section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
		
		
<!-- Left Sidebar -->

<section class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" style="background-color:RGB(245,245,245);">
			<div class="row">
				<div class="col-md-2" id="left-sidebar" style="margin-top:1%">
					
				<!-- Accordian left-sidebar  starts -->
				<div class="card">
					<img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/img/ajeet_sir.jpg" style="height: 200px;width: 200px">

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
								if($this->session->userdata('role') == 2) {  //  only HOD can add Staff
									?>
									<li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/add_staff">Add Staff</a></li>
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
							<div class="col-md-11 text-justify" style="margin-left:3%;padding-bottom:2%;">
								<div class="separator"></div>
								<h3><b><?php echo $details[0]['Name']; ?></b></h3>
								<div class="separator"></div>
								<h4><b>Publications </b></h4>

								<span>
									<ol>
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
						</div>  <!-- end of topslider -->
					</div>
				</div>
			</div>  <!-- Main carousel ends -->

			<?php echo form_open('faculty/add_publication'); ?>
			<div class="fl_right">
				<?php echo validation_errors('<div class="error"><i class="fa fa-exclamation-triangle"></i>', '</div>'); ?>

				<input type="text" id="pub_title" name="pub_title" placeholder="Title" value="<?php echo set_value('pub_title'); ?>" required />
				<input type="text" id="pub_abs" name="pub_abs" placeholder="Abstract" value="<?php echo set_value('pub_desc'); ?>" required/>
				<input type="text" id="pub_name" name="pub_name" placeholder="Publication Name" value="<?php echo set_value('pub_name'); ?>" required/>
				<input type="date" id="pub_date" name="pub_date" placeholder="Date" value="<?php echo set_value('pub_date'); ?>" required/>
				<!--<input type="text" id="pub_link" name="pub_link" placeholder="Publication Link" value="<?php echo set_value('pub_link'); ?>" required/>-->

				<button type="submit" class="btn btn-primary">Add Publication</button>
			</div>
			<?php echo form_close(); ?>
		
			</div>		   
		</div>
	</div>
</section>