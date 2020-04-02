<?php 

	$server = "localhost";
	$username = "rdevelo1_master";
	$dbpass = "masterYii365";
	$dbname = "rdevelo1_writers";

	$conn = new mysqli($server, $username, $dbpass, $dbname);

		// Check connection
	if ($conn->connect_error) {
		die("connection failed: ".$conn->connect_error);
	}
 ?>