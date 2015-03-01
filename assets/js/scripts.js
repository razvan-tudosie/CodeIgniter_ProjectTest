$( "a.addIdea" ).click(function() {
	$( "div.ideaForm" ).toggle();
});

// dropdown menu toggle
$( ".dropdown" ).click(function() {
	$(this).toggleClass( "open" );
});


$(document).ready(function() {

	// ajax idea form submit
	$('.ideaForm').submit(function(){
		
		$.ajax({
			type: "POST",
			url: $('.ideaForm').attr('action'),
			data: $('.ideaForm').serialize(),
			dataType: "json"
		})

		.done(function( resp ) {
		
			if(resp.st == 0) {
			
				 $('#validation-error').html(resp.msg);
			
			} else if(resp.st == 1) {

			  //$('#validation-error').html(data.msg);
				window.location.reload();
			
			}
					
		});
		
		return false;

	});

	
});