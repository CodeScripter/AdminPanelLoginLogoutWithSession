<?php
 include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/login.css">
	<title>Admin Login Page</title>
</head>

<body>
	<form name="login" action="validate.php" method="post">
		<div class="login-box">
			<h1>Admin Login</h1>
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="username" name="username" value="">
			</div>
			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password" name="password" value="">
			</div>
			<input class="button" type="submit" name="login" value="Sign In">
		</div>
		<?php
		if(isset($_GET['loginerror']) && $_GET['loginerror']  == 1){
			echo '<div> Login error!</div>';
		}
		?>
	</form>
</body>

</html>
