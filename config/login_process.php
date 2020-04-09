<?php
	session_start();
	require_once('login-db.php');
	
	$message 	= "";
	$user 		= "";

	if (isset($_POST['login'])) {

		$email 	= $_POST['email'];
		$pass 	= sha1($_POST['pass']);

		$query = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";

		$result = mysqli_query($conn,$query);


		if (mysqli_num_rows($result) > 0 ) 
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
				if ($row['user'] == 'writer') {
					$_SESSION['WriterUser'] = $row['email'];
					$_SESSION['user'] = $row['user'];
					header('Location: ../writer.php');
				}
				else{
					$_SESSION['ClientUser'] = $row['email'];
					$_SESSION['user'] = $row['user'];
					header('Location: ../client.php');
				}
			}
		}
		else{
		header('Location: ../login.php');
		$message = "Wrong username or password";
	}

	}


?>