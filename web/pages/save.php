<?php
	include ("connect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	mysql_query ("INSERT INTO users VALUES ('$username','$password','$email');") or die ("Error: " . mysql_error());

	
?>