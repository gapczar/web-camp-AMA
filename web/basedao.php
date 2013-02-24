<?php

	class BaseDAO{

		protected $conn = null;

		function open_conn(){
			$this->conn = new PDO("mysql:host=localhost;dbname=poll_web", "root", "root");
		}

		function close_conn(){
			$this->conn = null;
		}

	}

?>