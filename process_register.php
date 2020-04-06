<?php
	include 'includes/header.php';
 ?>

<section class="login-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				<form class="login" method="post" action="register.php">
					<h5>Please Sign Up</h5><br>
					<div class="form-group">
						<a class="btn btn-secondary" href="register.php">Sign Up with Email</a>
					</div>
					<p>or</p>
					<div class="form-group">
						<button class="btn btn-primary"><i class="fa fa-google"></i>  Sign up with google</button>
						<button class="btn btn-success"><i class="fa fa-facebook"></i>Signup with facebook</button>
					</div>
					<h6><span>Have an account?</span> </h6>
					<a href="process_login.php" class="btn btn-secondary">Log In</a>
				</form>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</section>

 <?php
	include 'includes/footer.php';

 ?>