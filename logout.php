<?php
	
	session_start();

	if ($_SESSION['user']) {
		session_unset('user');
		session_destroy();
		header('Location: login.php');
	}else{
		header('Location: login.php');
	}
	
	
 ?>