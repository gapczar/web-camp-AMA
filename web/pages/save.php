<?php
	include ("connect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['emailAdd'];

	mysql_query ("INSERT INTO users VALUES (null,'$username','$password','$email','voter');") or die ("Error: " . mysql_error());

	header("Location: login.php");
	
?>