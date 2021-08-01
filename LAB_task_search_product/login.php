<?php include 'header.php';?>
<?php 
	include'controllers/userController.php';
?>

<form action="" method="post">
	<h2 align="center">Log in here</h2><br>
	<h3 align="center"><?php echo $err_db;?></h3>

	<table align="center">
		<tr>
			<td align="left">Username:</td>
		</tr>
		<tr>
			<td><input type="text" name="uname" value="<?php echo $uname;?>"><span><?php echo $err_uname;?></span></td>
		</tr>
		<tr>
			<td align="left">Password:</td>
		</tr>
		<tr>
			<td><input type="password" name="password" value="<?php echo $password;?>"><span><?php echo $err_password;?></span></td>
		</tr>
		<tr>
			<td align="center"><br><input type="submit" name="btn_login" value="Login"></td>
		</tr>
		<tr>
			<td align="center" >
				<span>Not registered yet? <a href="sign_up.php">Sign up</a></span>
			</td>
		</tr>
	</table>
</form>

<?php include 'footer.php';?>