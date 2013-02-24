<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>
		<link href='../css/index.css' rel='stylesheet' type='text/css'>
		<title>Poll Website for Mobile Apps</title>
	</head>
	<body>
		<div class="divBody" >
			<header>
				<h1>Poll for Mobile APPS</h1>
			</header>

<section>
	<table class="loginTable"> 
		<form name="loginForm" id="loginForm" action="check_login.php" method="POST">
			<tr>
				<td>
					<label for="username">Username: </label>
				</td>
				<td>
					<input type="text" name="username" placeholder="Username"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Password : </label>
				</td>
				<td>
					<input type="password" name="password" placeholder="Password"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="LOGIN" class="button"/>
					<a href="register.php"><button type="button" class="button">SIGNUP</button></a>
				</td>
			</tr>
		</form>
	</table>
</section>

<?php
	include("footer.php");
?>