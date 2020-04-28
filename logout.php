<?php
	
	include "login.php";

	if ($_SESSION['user']) {
		session_unset('user');
		session_destroy();
		header('Location: index.php');
	}
	else{
		
	}

	
	
 ?>