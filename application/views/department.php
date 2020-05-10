<section class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8" style="background-color:RGB(245,245,245);">

		<h2> About <?php echo $records[0]['Dept_Name']	; ?> </h2>
		<div class="row">

			<div class="col-sm-2 col-md-2 col-xs-2 float-left">
				<img class="pull-left img-thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIsCK8HrLIkqEcFpYbYzgJjt9JRWaCaxkEkiTLQ-dtQocLDeyK&s" alt="..." style="margin-righr:10px">
			</div>
			<div class="col-sm-9 col-md-9 col-xs-10 float-right">
				<p class="text-justify">
					<?php echo $records[0]['History']; ?>
				</p>
				<p class="clearfix"></p>
			</div>
		</div>
		

		<h2> Vision </h2>
		<div class="row">

			<div class="col-sm-2 col-md-2 col-xs-2 float-left">
				<img class="pull-left img-thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIsCK8HrLIkqEcFpYbYzgJjt9JRWaCaxkEkiTLQ-dtQocLDeyK&s" alt="..." style="margin-righr:10px">
			</div>
			<div class="col-sm-9 col-md-9 col-xs-10 float-right">
				<p class="text-justify">
					<?php echo $records[0]['Vision']; ?>
				</p>
				<p class="clearfix"></p>
			</div>
		</div>

		<h2> Mission </h2>
		<div class="row">
			
			<div class="col-sm-2 col-md-2 col-xs-2 float-left">
				<img class="pull-left img-thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIsCK8HrLIkqEcFpYbYzgJjt9JRWaCaxkEkiTLQ-dtQocLDeyK&s" alt="..." style="margin-righr:10px">
			</div>
			<div class="col-sm-9 col-md-9 col-xs-10 float-right">
				<p class="text-justify">
					<?php echo $records[0]['Mission']; ?>
				</p>
				<p class="clearfix"></p>
			</div>
		</div>
			
		</div>

		<!--- Right Side Bar for departent specific Information -->

		<div class="col-md-2" style="background-color:RGB(245,245,245);">
		<div class="panel panel-primary">
			<div class="panel-heading">News</div>
			<div class="panel-body">
				<ul>
					<li> content 1 </li>
					<li> content 2 </li>
					<li> content 3 </li>
					<li> content 4 </li>
					<li> content 5 </li>
				</ul>
			</div>
		</div>
		</div>
	</div>
</section>
