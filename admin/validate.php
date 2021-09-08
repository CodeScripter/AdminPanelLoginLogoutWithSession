<?php
        session_start();

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();

	echo "$users";
	
	foreach($users as $user) {
		
		if(($user['user_name'] == $username) && ($user['password'] == $password)) {
                        $_SESSION["id"] = $user['id'];
                        $_SESSION["user_name"] = $user['user_name'];
			// header("Location: admin-page.php");
                        if(isset($_SESSION["id"])) {
                                header("Location:admin-page.php");
                        }
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
