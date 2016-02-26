<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>

<!-- StyleSheet -->
	<link rel="stylesheet" type="text/css" href="style.css">
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<!-- Favicon -->
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

</head> 

<body> 
	<h1>Register</h1>
	<div class='Layout'>
	<form action="registerForm.php" method="post">
		Username: <input type="text" name="username" id="username"> </br>
		Password: <input type="password" name="password" id="password">
	</br>
		<input type="submit" value="Register" class="btn">
	</form>
	</div>
</body>
</html>