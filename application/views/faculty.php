


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  Main section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
	    
		
<!-- Left Sidebar -->

<section class="container-fluid">
	<div class="row">
  <div class="col-md-1"></div>
	    <div class="col-md-10" style="background-color:RGB(245,245,245);">
	        <div class="row">
	        	<div class="col-sm-2 col-md-2" id="left-sidebar"  style="margin-top:1%">
	        		
	        		<!-- Accordian left-sidebar  starts -->
	            <div class="card" >
                    <img class="card-img-top img-responsive" src="<?php echo base_url();?>assets/img/ajeet_sir.jpg" style="height: 200px;width: 200px">
                  <div class="card-body">
                      <div style="margin-left: 30;margin-right: 30">
                        <h5 class="card-title"><b><?php echo $details[0]['Name']; ?> <!--Ajeet Singh Nain--></b></h5>
                        <p class="card-text"> <b> <?php echo $details[0]['Designation']; ?> </b> </p>
                        <p class="card-text"> <b> B.Sc, M.Sc, Phd </b> </p>
                      </div>
                    <ul class="list-group">
                      <li class="list-group-item"><a href="#">Profile</a></li>
                      <li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fcourses">Courses</a></li>
                      <li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fpublications">Publications</a></li>
                      <li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fresearch">Research</a></li>
                      
                      <li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/fmeetings">Meetings & Conferences</a></li>
                      <li class="list-group-item"><a href="<?php echo site_url(); ?>/faculty/add_staff">Add Staff</a></li>
                   
                    
                    </ul>  
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
                <h4><b>About the faculty</b></h4>
								<span>Dr A.S. Nain completed his PhD from Indian Space Research Organization (ISRO), India in the year 2002 and worked as 
                Visiting Scientist / postdoctoral fellow in ZALF (Leibniz), Muncheberg, Germany from 2003 to 2005. He is currently holding 
                prestigious NABARD-Chair and Head, Department of Agrometeorology, GB Pant University of Agriculture and Technology. Prior to 
                present engagement he had served Indira Gandhi Agricultural University for five years. He has published more than 100 papers in 
                reputed journals and has been serving as associate editor/ editorial board member of reputed journals. He has to his credit many 
                prestegeous awards viz Young Scientist Awards (twice), Dr BB Singh Research Excellence Award, Faculty Excellence Award (twice) etc. 
								    
								</span>

                <h4><b>Contact Details</b></h4>
								<span>
                  <p>Head Department of Agrometeorology</p>
                  <p>College of Agriculture</p>
                  <p>G B Pant University, Pantnagar</p>
                  <p> Email : <span class="text-danger"><?php if($details[0]['Email']) { echo $details[0]['Email']; } else { echo "Not provided"; } ?> <!--abc@gmail.com--></span></p>
                  <p> Office Phone : <span class="text-danger"><?php if($details[0]['Office_Contact']) { echo $details[0]['Office_Contact']; } else { echo "Not provided"; } ?> <!--911--></span></p>
                  <p> Personal Phone : <span class="text-danger"><?php if($details[0]['Personal_Contact']) { echo $details[0]['Personal_Contact']; } else { echo "Not provided"; } ?> <!--911--></span></p>
								</span>


                <h4><b>Membership details</b></h4>
                <span>
                  <ul>  
                    <li><b>Member of Institute of Electrical and Electronics Engineers (IEEE)</b></li>
                    <li><b>Member of Institute of Electrical and Electronics Engineers (IEEE)</b></li>
                  </ul>
								</span>

                <h4><b>Personal details</b></h4>
								<span>
                  <div class="table-responsive">          
                    <table class="table">
                      <thead>
                        <tr><th>Year</th><th>Degree</th><th>Description</th></tr>
                      </thead>
                      <tbody>
                        <tr><td>1919</td><td>Degree 1</td><td>in xsz stream, from xyz college + any other</td></tr>
                        <tr><td>1919</td><td>Degree 2</td><td>in xsz stream, from xyz college + any other</td></tr>
                        <tr><td>1919</td><td>Degree 3</td><td>in xsz stream, from xyz college + any other</td></tr>
                        <tr><td>1919</td><td>Degree 4</td><td>in xsz stream, from xyz college + any other</td></tr>
                      </tbody>
                    </table>
                    </div>
                  
								</span>


                <h4><b>Professional Experience</b></h4>
								<span> 
                <div class="table-responsive">          
                    <table class="table">
                      <thead>
                        <tr><th>Year</th><th>Experience</th><th>Description</th></tr>
                      </thead>
                      <tbody>
                        <tr><td>1914-1918</td><td> Black Ops</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops</td><td>Defeated Germans in world war</td></tr>
                        
                      </tbody>
                    </table>
                    
                  </div>
								</span>

                <h4><b>Administrative Experience</b></h4>
								<span>
                <div class="table-responsive">          
                    <table class="table">
                      <thead>
                        <tr><th>Year</th><th>Experience</th><th>Description</th></tr>
                      </thead>
                      <tbody>
                        <tr><td>1914-1918</td><td> Black Ops comander</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops comander</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops comander</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops comander</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops comander</td><td>Defeated Germans in world war</td></tr>
                        <tr><td>1914-1918</td><td> Black Ops comander</td><td>Defeated Germans in world war</td></tr>
                        
                      </tbody>
                    </table>
                    </div>
                  </div>
								</span>
        					</div>
		    		
					</div>
						
		        </div>

	  			

	  			



	  		
	              	</div>
	            </div>
	        </div>

	       
	    </div>
	</div>
</section>