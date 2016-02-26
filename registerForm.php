<?php
	require_once 'meekrodb.2.3.class.php';
	DB::$user = 'root';
	DB::$password = 'windmills';
	DB::$dbName = 'BumzBreak';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$hash = password_hash($password, PASSWORD_DEFAULT);

	DB::insert('Credentials', array(
		'username' => $username,
		'password' => $hash
	));

	header('Location: index.php');
?>