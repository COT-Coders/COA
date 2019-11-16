$(function(){ //  expanding more link of issue page and search page for abstract

		$('.show_full_abstract').click(function( e ){

			
			e.preventDefault();

			var authors = $( this ).parent().siblings('.authors').text();

			authors = authors.substring( 9, authors.length );
			console.log( authors );

			$.ajax({

				url:'/ijbaar/index.php/issue/get_abstract',
				data:{'authors':authors},
				dataType:'text',
				type:'POST',

				beforesend:function(){

					console.log('before');

					$('.modal').modal('show');

					$('.modal-content').html('<i class="glyphicon glyphicon-refresh"></i> Loading...');

				},
				success:function( data ){

					console.log('after');
					//console.log(data);


					var result = $.trim( data.toString() );
					//prompt(result);

					$('.modal').modal('show');
					
					$('.modal-content').html('<h4>Abstract:</h4><hr>'+ result );

				},
				error:function(){
					alert('Something went wrong in getting Abstract');
				}
			});
			
		});
	});

/*$(function(){  //  enabling/disabling request to become reviewer mode
			$.ajax({

				url:'/ijbaar/index.php/user/get_user_status',
				data:'s',
				dataType:'text',

				type:'POST',

				success:function( data ){

					var result = $.trim( data.toString() );
					//alert(result);


					if( result == 0  ){
						$('#reviewer_mode_switch').on("click", function(e){  e.preventDefault();  return false;});
					}
					else if(result == 1) {
						$('#reviewer_mode_switch').removeClass('disabled');
					}
					else{
						$('#reviewer_mode_switch').on("click", function(e){  e.preventDefault();  return false;});
					}

					if( result > 0){
						$('#request_reviewer').hide();
						
					}
					else {
						$('#request_reviewer').removeClass('disabled');
					}
				}
			});

			/*$('#request_reviewer').click(function(){

				window.location = '/ijbaar/index.php/user/request_to_become_reviewer';
			});*/

		//});