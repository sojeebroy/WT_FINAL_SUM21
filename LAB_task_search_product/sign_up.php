<?php include 'header.php';?>
<?php 
	include'controllers/userController.php';
?>
<form action="" method="post">
	<h2 align="center">Sign Up</h2><br>
	<h3 align="center"><?php echo $err_db;?></h3>

	<table align="center">
		<tr>
			<td align="left">Name:</td>
		</tr>
		<tr>
			<td><input type="text" name="name" value="<?php echo $name;?>"><span><?php echo $err_name;?></span></td>
		</tr>
		<tr>
			<td align="left">Username:</td>
		</tr>
		<tr>
			<td><input type="text" name="uname" value="<?php echo $uname;?>"><span><?php echo $err_uname;?></span></td>
		</tr>
		<tr>
			<td align="left">Email:</td>
		</tr>
		<tr>
			<td><input type="text" name="email" value="<?php echo $email;?>"><span><?php echo $err_email;?></span></td>
		</tr>
		<tr>
			<td align="left">Password:</td>
		</tr>
		<tr>
			<td><input type="password" name="password" value="<?php echo $password;?>"><span><?php echo $err_password;?></span></td>
		</tr>
		<tr>
			<td align="center"><br><input type="submit" name="sign_up" value="Sign Up"></td>
		</tr>
	</table>
</form>


<?php include 'footer.php';?>