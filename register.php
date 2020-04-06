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
					<h5>Please Sign Up</h5>
					<div class="form-group">
						<input class="form-control" type="text" name="f_name" placeholder="Your First Name" required>
						<input class="form-control" type="text" name="l_name" placeholder="Your Last Name" required>
						<input class="form-control" type="email" name="email" placeholder="Your email address" required>
						<input class="form-control" type="password" name="pass" placeholder="Your password" required>
						<input class="form-control" type="password" name="confirm_password" placeholder="Confirm password" required>
						<button class="btn btn-secondary" name="submit" id="register">Sign Up</button>
					</div>
					<p>or</p>
					<div class="form-group">
						<button class="btn btn-primary"><i class="fa fa-google"></i>  Sign up with google</button>
						<button class="btn btn-success"><i class="fa fa-facebook"></i> Sign up with facebook</button>
					</div>
					<h6><span>Have an account?</span> </h6>
					<a href="login.php" class="btn btn-secondary">Log In</a>
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