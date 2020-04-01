<?php
	session_start();
	
	if(!isset($_SESSION['user'])){  
		header("location: login.html");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>User Registration Page</title>
</head>
<body>
	<strong>Create User</strong>
	<form action="../php/regCheck.php" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>