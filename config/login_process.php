<?php
	session_start();
	require_once('db.php');
	
	$message 	= "";
	$role 		= "";

	if (isset($_POST['login'])) {

		$email 	= $_POST['email'];
		$pass 	= sha1($_POST['pass']);


		$stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND pass=?");
		$stmt->execute([$email,$pass]);


		if ( $stmt->rowCount() > 0 ) 
		{
			while ($row = $stmt->fetch()) 
			{
				if ($row['role'] == 'writer') 
				{
					$_SESSION['WriterUser'] = $row['email'];
					$_SESSION['role'] = $row['role'];
					header('Location: ../writer.php');
				}
				elseif ($row['role'] == 'client')
				{
					$_SESSION['ClientUser'] = $row['email'];
					$_SESSION['role'] = $row['role'];
					header('Location: ../client.php');
				}
				elseif ($row['role'] == 'admin') 
				{
					$_SESSION['AdminUser'] = $row['f_name'];
					$_SESSION['role'] = $row['role'];
					header('Location: ../dashboard.php');
				}
				header('Location: ../index.php');
			}
		}
		else{
		header('Location: ../login.php');
		$message = "Wrong username or password";
	}

	}


?>