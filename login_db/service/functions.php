<?php
	
	require('db.php');
	
	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function deleteUser($id){
		$con = getConnection();
		$sql = "DELETE FROM users WHERE id = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserDataById($id){
		$con = getConnection();
		$sql = "SELECT * from users WHERE id = $id";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function updateUserData($sql){
		$con = getConnection(); 
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function updateUserData1($username, $password, $email, $type){
		$con = getConnection(); 
		$sql ="UPDATE users SET username='{$username}', password='{$password}', email='{$email}', type='{$type}'' WHERE id='{$GLOBALS['id']}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}
?>
