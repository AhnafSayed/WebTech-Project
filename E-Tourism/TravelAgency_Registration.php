<?php include 'main_header.php';
	  include 'Controllers/UserController.php';
?>


<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset style="width: 800px; height: 330px;">
		<legend align="center"><h1><b>Travel Agency Registration</b></h1></legend>
			<table>

				<tr>
					<td><span>Agency Name:</span></td>
					<td></td>
					<td><input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
				</tr>

				<tr>
					<td><span>Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>

				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>

				<tr>
					<td><span>Confirm Password:</span></td>
					<td></td>
					<td><input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>"> </td><td><span><?php echo $err_confirmpassword;?></span></td>
				</tr>


				<tr>
					<td><span>Email:</span></td>
					<td></td>
					<td><input type="text" size="25" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>

				<br>

				

				<tr>
					<td><span>Phone:</span></td>
					<td></td>
					<td><input type="text" name="phone" value="<?php echo $phone;?>" placeholder = "Phone Number" size="12"> </td><td><span><?php echo $err_phone;?></span></td>
				</tr>

				<tr>
					<td><span>ETIN Number:</span></td>
					<td></td>
					<td><input type="text" name="etinnum" value="<?php echo $etin;?>"> </td><td><span><?php echo $err_etin;?></span></td>
				</tr>

				<tr>
				<td colspan="3" align="center">
				<input type="Submit" name="travelagency_signup" value="Register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
<?php include 'main_footer.php';?>