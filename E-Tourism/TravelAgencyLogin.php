<?php include 'Controllers/UserController.php';
 include 'main_header.php';
?>
<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset style="width:500px; height:320px";>
		<legend align="center"><h1><b id="b3">Travel Agency Login</b></h1></legend>
			<table id="b4">			
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
				<input id="b3" name="travelagency_login" type="Submit" value="Login">
				</td>
				</tr>
				<br>
				<tr>
				<td><h5>Don't have an account?</h5><a href="TravelAgency_Registration.php"><input id="b3" type="submit" value="Sign Up!"></h5></a></td>
				</tr>
			</table>
			<h5><?php echo $err_db;?></h5>
	    </fieldset>
		</form>
		</center>
	</body>
</html>

<?php require_once 'main_footer.php';?>