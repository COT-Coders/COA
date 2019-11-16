$(document).ready(function(){
	$('.autoscript').keyup(function(){
		var query_string = $(this).val();
		$.ajax({
			type: "POST",
			url: "../../search.php",
			data: { name:query_string },
			success: function(data)
			{
				$('.suggestresult').html(data);
				$('.suggestresult li').click(function(){
					var return_value = $(this).text();
					$('.autoscript').attr('value', return_value); 
					$('.autoscript').val(return_value);
					$('.suggestresult').html('');
				});
			}
		});
	});
});