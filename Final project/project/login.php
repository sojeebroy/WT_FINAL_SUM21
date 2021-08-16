<?php 

	include 'controllers/adminController.php';
	include 'header.php';
?>
	<script src="javaScripts/login.js"></script>

		<h1 align="center"> Sign in with your organizational username and password.</h1>
			<h3 align="center"><?php echo $err_db;?></h3>

		<form onsubmit="return validate()" action="" method="post">

		<table align="center">
		<tr>
			<td>Username :</td>
			<td><input id="uname" type="text" name="uname" value="<?php echo $uname; ?>"> </td>
			<td><span id="err_uname"> <?php echo $err_uname;?> </span></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input id="password" type="password" name="password" value="<?php echo $password;?>"> </td>
			<td><span id="err_password"> <?php echo $err_password;?> </span></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input class="btn2" type="submit" name="btn_login" value="login"></td>	
		</tr>
		<tr>
			<td align="center"colspan="2">
				<span><br>Not registered yet? <a href="signup.php">Sign up</a></span>
			</td>
		</tr>
		
	</table>

	</form>


<?php	
	include 'footer.php';
?>
