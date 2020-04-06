<?php

	require_once('./config/db.php');

	if (isset($_POST)){

		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$email = $_POST['email'];
		$pass = sha1($_POST['pass']);


		$sql= "INSERT INTO users(f_name,l_name,email,pass) VALUES(?,?,?,?)";

		$stmt = $conn->prepare($sql);

		$results = $stmt->execute([$f_name,$l_name,$email,$pass]);
		if ($results) {
			echo "Your registration has been submitted successfully.";
		}else{
			echo "There were errors while saving the data.";
		}

	}


?>