<?php
	
	include ('basedao.php');

	class UserDAO extends BaseDAO{

		function addUser($username, $password, $emailAdd){
			$status = "voter";
			$this->open_conn();
			$stmt = $this->conn->prepare("INSERT INTO 'users' VALUES(null, ?, ?, ?, '$status')");
			$stmt->bindParam(1, $username);
			$stmt->bindParam(2, $password);
			$stmt->bindParam(3, $emailAdd);
			$stmt->execute();
			$this->conn_close();
		}

		function checkStatus($id){
			$this->open_conn();
			$stmt = $this->conn->prepare(SELECT 'status' FROM 'users' WHERE 'users'.'id' = ?);
			$stmt->bindParam(0, $id);
			if($row = $this->stmt->fetch()){
				//$row['status'];
				if($row['status'] == "voted"){
					return true;
				}
				else{
					return false;
				}
			}
		}

		function checkAcct($username){
			$this->open_conn();
			$stmt = $this->conn->prepare(SELECT 'username' FROM 'users' WHERE 'users'.'username' = ?);
			$stmt->bindParam(0, $username);
			if($row = $this->stmt->fetch()){
				if($row['username']){


				}
			}
		}

	}

?>