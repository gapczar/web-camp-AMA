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

				<form name="loginForm" id="loginForm" action="save.php" method="POST">

			<tr>
				<td>
					<label for="user">USERNAME: </label>
				</td>
				<td>
					<input type="text" name="username" placeholder="Username"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="pass">PASSWORD : </label>
				</td>
				<td>
					<input type="pass" name="password" placeholder="Password"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">EMAIL : </label>
				</td>
				<td>
					<input type="email" name="emailAdd" placeholder="Email"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<a href="login.php"><button type="button" class="button">CANCEL</button></a>
					<input type="submit" value="REGISTER" class="button"/>
				</td>
			</tr>
		</form>
	</table>
</section>

<?php
	include("footer.php");
?>