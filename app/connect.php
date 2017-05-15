<?php
	$servername = "localhost";
	$username = "mehadrin";
	$password = "Pass@mehadrin12";
	$db = "mehadrin";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo "Connection failed: " . $e->getMessage();
	}
?>