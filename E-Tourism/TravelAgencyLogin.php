<?php include 'Controllers/UserController.php';
 include 'main_header.php';
?>
<html>
	<head></head>
	<body>
		<center>
			<h5><?php echo $err_db;?></h5>
		<form action="" method="post">
		<fieldset style="width:270px" "height:300px">
		<legend align="center"><h1><b>Login</b></h1></legend>
			<table>			
				<tr>
					<td><span>Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<br>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
				<td colspan="3" align="center">
				<input name="travelagency_login" type="Submit" value="Login">
				</td>
				</tr>
				<br>
				<tr>
				<td><h5>Don't have an account?</h5><a href="Signupoption.php"><h5>Sign Up!</h5></a></td>
				</tr>
			</table>
	    </fieldset>
		</form>
		</center>
	</body>
</html>