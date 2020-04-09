<?php

	session_start();
	require_once("includes/users-header.php");
	
	if (isset($_SESSION['user'])) 
	{
		if ($_SESSION['user'] != 'client')
		 {
			header('Location: writer.php');
		}
	}
	else
	{
		header('Location: login.php');
	}


?>


<div class="container">
	<div class="jumbotron">
		<h2 class="text-center">
			Welcome <?php echo $_SESSION['ClientUser']; ?>
		</h2>
	</div>
</div>


<?php 
	require_once("includes/footer.php");

 ?>