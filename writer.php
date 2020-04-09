<?php
	
	session_start();
	require_once("includes/users-header.php");

	if (isset($_SESSION['user'])) 
	{
		if ($_SESSION['user'] != 'writer')
		 {
			header('Location: client.php');
		}
	}
	else
	{
		header('Location: index.php');
	}

?>


<div class="container">
	<div class="jumbotron">
		<h2 class="text-center">
			Welcome <?php echo $_SESSION['WriterUser']; ?>
		</h2>
	</div>
</div>










<?php 
	require_once("includes/footer.php");
 ?>