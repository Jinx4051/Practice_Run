<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>BumzBreak IT</title>

<!-- StyleSheet -->
	<link rel="stylesheet" type="text/css" href="style.css">
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<!-- Favicon -->
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

</head>
<body>
<!-- Bootstrap -->
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- Bootstrap -->

	<h1>BumzBreak IT</h1>

			
	

	<div class='Layout'>
	
	<div class="navigation">
	<nav class="navbar navbar-default">
			<ul class="nav navbar-nav navbar-right">
        		<li><a href="index.php">Home</a></li>
        		<li><a href="test.php">Test</a></li>
    		</ul>
    </div>

	<?php if(isset($_SESSION['loggedin'])) {
		echo '<form action="postForm.php" method="post">
			<TextArea name="bumzBreak" id="bumzBreak" cols="30" rows="10">
			</TextArea>
			</br>
			<input type="submit" class="btn">
			</form>';
		
		}
		
		else {
			echo '<form action="login.php" method="post">
				Username: <input type="text" name="username" id="username" /> </br>
				Password: <input type="password" name="password" id="password" />
				</br>
				<input type="submit" class="btn">';

				if (isset($_SESSION['loggedin'])){
				echo '<a href="logout.php"><input type="submit" value="Logout" class="btn"></a>';
			} else {
				echo '<a href="register.php" class="btn" style="margin-left: 1.2em;">Register</a>';
		}
			echo '</form>';
		}

		
	?>
</div>

	<h2>Latest Posts</h2>

	<?php
		require_once 'meekrodb.2.3.class.php';
		DB::$user = 'root';
		DB::$password = 'windmills';
		DB::$dbName = 'BumzBreak';
		$results = DB::query("SELECT post FROM BumzBreak");
		foreach ($results as $row){
			echo "<div class='bumzBreak'>" . $row['post'] . "</div>";
		}
	?>

</body> 
</html>