<?php
	include ("connect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysql_query ("SELECT * FROM users WHERE username= '$username'") or die ("Error: ".mysql_error());

	if(mysql_num_rows($query) == 1){

		header("Location: home.php");
	}else{
		return false;
	}
?>