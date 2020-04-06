 <?php

	$db_user = "rdevelo1_master";
	$db_pass = "masterYii365";
	$db_name = "rdevelo1_R254";

	$conn = new PDO('mysql:host=localhost;dbname='. $db_name. ';charset=utf8', $db_user, $db_pass);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>