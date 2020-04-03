<?php
	include 'includes/header.php';
	require 'fb-login/fb-init.php';

 ?>


 <section class="login-bg">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3">
 				
 			</div>
 			<div class="col-md-6">
 				<form class="login">
 					<h5>Please Log In </h5>
 					<div class="form-group">
 						<input class="form-control" type="email" name="email" placeholder="Enter email address">
 						<input class="form-control" type="password" name="password" placeholder="Your password">
 						<a class="btn btn-secondary">Login</a>
 					</div>
 					<p>or</p>
 					<div class="form-group">
 						<a class="btn btn-primary"><i class="fa fa-google"></i>  Sign in with google</a>
 						<a href="<?php echo $login_url; ?>" class="btn btn-success"><i class="fa fa-facebook"></i> Sign in with facebook</a>
 					</div>
 					<h6><span>Don't have an account?</span> </h6>
 					<a href="register.php" class="btn btn-secondary">Sign Up</a>
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