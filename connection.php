<?php
	$server = "localhost";
	$user = "root";
	$pass = "root";
	$db = "smsdb";

	$conn = new mysqli($server, $user, $pass, $db);

	if(conn->connect_error){
		die("connection failed".conn->connect_error);
	}

	echo "connection established successfully.";

?>