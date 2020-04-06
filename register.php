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
						<input id="f_name" class="form-control" type="text" name="f_name" placeholder="Your First Name" required>
						<input id="l_name" class="form-control" type="text" name="l_name" placeholder="Your Last Name" required>
						<input id="email" class="form-control" type="email" name="email" placeholder="Your email address" required>
						<input id="pass" class="form-control" type="password" name="pass" placeholder="Your password" required>
						<select class="form-control" name="user">
							<option>Select User</option>
							<option>Client</option>
							<option>writer</option>
						</select>
						<button class="btn btn-secondary" name="submit" id="register">Sign Up</button>
					</div>
					<!-- 	<h3>I want to :</h3>
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
					  <label class="btn btn-secondary">
					    <input type="radio" name="options" id="option2" autocomplete="off">Hire writer
					  </label>
					  <label class="btn btn-secondary">
					    <input type="radio" name="options" id="option3" autocomplete="off"> Work as a Freelancer
					  </label>
					</div> -->
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