// This the sweetalert2 initialization
	$(function() {
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if (valid) {

				var f_name 	= $('#f_name').val();
				var l_name 	= $('#l_name').val();
				var email 	= $('#email').val();
				var pass 	= $('#pass').val();

				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {f_name:f_name,l_name:l_name,email:email,pass:pass},
					success:function(data){
						Swal.fire({
						  icon: 'success',
						  title: 'Successful',
						  text: data,
						  footer: '<a href="login.php">Please Sign In</a>'
						})
					},
					error:function(data){
						Swal.fire({
						  icon: 'error',
						  title: 'Errors',
						  text: data,
						  footer: '<a href>Why do I have this issue?</a>'
						})
					}
				});
			}else{

			}
		});
	});