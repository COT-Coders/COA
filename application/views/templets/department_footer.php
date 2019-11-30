<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  footer section =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
	    
<footer class="container-fluid" style"margin-top:auto;">
	   		<div class="row">
			   <div class="col-md-1"></div>
	   			<div class="col-md-10" style="margin-bottom:0.5%;height:80px;background-color:#0F204B;border-top:1px solid RGB(0,76,102);">
	   				<p style="color:white; text-align:center; margin-top:2.8%;">
	   					<?php 
	   					if( isset($visitor) && $visitor ){
	   						?>

	   					<span class="pull-left">Visitor counter - <span class="label label-warning"><strong><?php echo $visitor;?></strong></span></span>

	   					<?php 
	   					}
	   					?>

                    &#169; Copyright 2015, Directorate of Experiment Station , <a href="http://gbpuat.ac.in" target="_blank">GBPUAT Pantnagar</a> - All rights reserved.
	   				<span class="pull-right"><a href="<?php echo site_url(); ?>/team" id="team" style="color:white;">Site Development Team</a></span>
	   				</p>
	   			</div>
			</div>
		</footer>
		<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-  footer section Ends =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

		<section>
	    	
	    	
	    </section>


		
	    <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>


<!-- Navigation Bar DropDown Script -->
  <script>
$(document).ready(function() {	
	//NAVBAR
	$('.navbar-main-menu > li.dropdown').mouseenter(function() {
		$(this).addClass('open');
	});
	
	$('.navbar-main-menu > li.dropdown').mouseleave(function() {
		$(this).removeClass('open');
	});
	
	var minimum = 1250;
	var maximum = 1500;
	
	$( '#slider-range' ).slider({
      range: true,
      min: minimum,
      max: maximum,
      values: [ minimum, maximum ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] );
		$( "#amount2" ).val( "$" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ));
	$( "#amount2" ).val( "$" + $( "#slider-range" ).slider( "values", 1 ));
	});

	
	
	// for reight affix button
	var screen_width = $(window).width();
	var screen_height = $(window).height();

	var top_1 = (screen_height/2 -30) + "px";
	var top_2 = (screen_height/2 +170) + "px";

	var left_1 = (screen_width-100) + "px";
	var left_2 = (screen_width-120) + "px";


	$('.right_affix').css({'top':top_1, 'left':left_1 });
	$('.right_affix_2').css({'top':top_2, 'left':left_2 });
		
	// for dynamic change in offset of screen width 
	$(window).resize( function(){

		var screen_width = $(window).width();
		var screen_height =  $(window).height();

		var top_1 = (screen_height/2 -100) + "px";
		var top_2 = (screen_height/2 +100) + "px";

		var left_1 = (screen_width-100) + "px";
		var left_2 = (screen_width-120) + "px";


		$('.right_affix').css({'top':top_1, 'left':left_1 });
		$('.right_affix_2').css({'top':top_2, 'left':left_2 });

	});


    </script>


	</body>
	</html>