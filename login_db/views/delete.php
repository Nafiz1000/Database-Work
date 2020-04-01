<?php
	session_start();
	$id = $_GET['id'];
	require_once('../service/functions.php');


	if(!isset($_SESSION['user'])){  
		header("location: login.html");
	}else{

		$result = deleteUser($id);
		//print_r($result);

		if($result == 1){
			print("User data deleted.");
		}else{
			print("Error.");
		}

	}

?>
