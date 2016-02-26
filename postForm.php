<?php
	$bumzBreak = $_POST['bumzBreak'];
	echo $bumzBreak;

	require_once 'meekrodb.2.3.class.php';
	DB::$user = 'root';
	DB::$password = 'windmills';
	DB::$dbName = 'BumzBreak'; 

	DB::debugMode();
	$bumzBreak = $_POST['bumzBreak'];

	DB::insert('BumzBreak', array(
		'post' => $bumzBreak)
	);
?>