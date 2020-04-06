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
 						<a style="color:#fff;" class="btn btn-secondary">Log In</a>
 						<a href="">Forgot Password?</a>
 					</div>
 					
 					
 					<h6><span>Don't have an account?</span> </h6>
 					<a href="process_register.php" class="btn btn-secondary">Sign Up</a>
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