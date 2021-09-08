<?php
session_start();
if(isset($_GET['logout']) && $_GET['logout']==1){
	unset($_SESSION["id"]);
	unset($_SESSION["user_name"]);
	header("Location:index.php");
}
if((!isset($_SESSION['id']) || !isset($_SESSION['user_name'])) && !isset($_GET['loginerror'])) {
	header("Location:index.php?loginerror=1");
}
?>
