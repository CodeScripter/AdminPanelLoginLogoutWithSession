<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "tiles";
	$username = "root";
	$password = "Beniwal3@$";

	$conn = new PDO(
		"mysql:host=$servername; dbname=$dbname",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
