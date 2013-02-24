<?php

	include 'userdao.php';

		$username = $_POST['username'];
		$password = $_POST['password'];
		$emailAdd = $_POST['emailAdd'];
		$action = new UserDAO();

		if(isset($_POST['submit'])){
			$action->addUser($username, $password, $emailAdd);
		}
?>