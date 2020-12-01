<?php

	if(isset($_GET["msg"])){
		
		if($_GET["msg"] == "invalid_user"){
			echo "username/password not valid...";
		}

		if($_GET["msg"] == "null_username"){
			echo "Username field is empty...";
		}

		if($_GET["msg"] == "null_password"){
			echo "Password field is empty...";
		}
	}

    if(isset($_COOKIE["isLoggedIn"]))
    {
		header("Location: home.php");
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body>
	<form method="post" action="../php/loginValidation.php">
		<fieldset>
			<legend>Admin login</legend>
			<table>
				<tr>
					<td> 
					    username
					</td>
					<td><input type="text" name="username" ></td>
				</tr>
				<tr>
					<td>
					    password
				    </td>
					<td><input type="password" name="password"></td>
				</tr>
				
				<tr>
					
					<td><input type="submit" name="submit" value="login"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>