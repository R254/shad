<?php
	include 'includes/header.php';
	require 'fb-login/fb-init.php';

 ?>


<?php if(isset($_SESSION['access_token'])): ?>
	<a href="fb-login/logout.php">Logout</a>

<?php  else:
	header('Location: login.php');
endif;

 ?>



 <?php
	include 'includes/footer.php';

 ?>