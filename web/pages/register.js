$(document).ready(function(){
	
	$('#loginForm').submit(function(){
		
		var username;
		var password;
		var email;

		$.ajax({
			url: 'save.php',
			data: {username: username, password:password, email:email},
			method: 'POST',

			success: function(){

				alert("Added!");
			};
			
		});

	});
});