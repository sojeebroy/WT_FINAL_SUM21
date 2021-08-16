<?php 
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'controllers/adminController.php';	
	$x=$_SESSION["loggedUser"];
	$admin=getAdmin($x);
	require_once 'header.php';
?>

<body>
	<form action="" method="post">
		<br><br>
		<h2 align="center">Change Password of <?php echo $x;?>.</h2>
		<table align="center">
		<tr>
			<td>Enter previous password :</td>
			<td><input type="password" name="password" value="<?php echo $password;?>"></td>
			<td><span> <?php echo $err_password;?> </span></td>	
		</tr>
		<tr>
			<td>Enter new password :</td>
			<td><input type="password" name="newPassword" value="<?php echo $newPassword;?>"></td>
			<td><span> <?php echo $err_newPassword;?> </span></td>	
		</tr>
		<tr>
			<td align="center" colspan="2"><span> <?php echo $err_result;?> </span></td>
		</tr>
		<tr>
			<td align="right"><a class="btn"href="editAdminProfile.php">Back</a></td>
			<td align="left"><input class="Button"type="submit" name="check" value="Check"></td>
		</tr>
	</table>
	</form>

<?php require_once 'footer.php'; ?>
