<?php
	
	include "login.php";

	if ($_SESSION['user']) {
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
	else{
		
	}

	
	
 ?>