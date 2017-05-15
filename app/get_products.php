<?php
	require_once('connect.php');

	try {
		$statement=$conn->prepare("SELECT * FROM products");
		$statement->execute();
		$results=$statement->fetchAll(PDO::FETCH_ASSOC);
		$json=json_encode($results);
	}
	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}

	$conn = null;
	echo $json;
?>