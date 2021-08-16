<?php
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'controllers/adminController.php';
	require_once 'adminHeader.php';		
	
	$x=$_SESSION["loggedUser"];
	$admin=getAdmin($x);
?>
	<form action="" method="post">
		<h2 align="center"> Update <?php echo $x;?> account.</h2>
		<table align="center">
		<tr>
			<td>Full Name :</td>
			<td><input type="text" name="name" value="<?php echo $admin["Name"];?>" ></td>
			<td><span> <?php echo $err_name;?> </span></td>	
		</tr>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="uname" value="<?php echo $admin["Username"]?>" ></td>
			<td><span> <?php echo $err_uname;?> </span></td>	
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" value="<?php echo $admin["Email"] ?>"> </td>
			<td><span> <?php echo $err_email;?> </span></td>
		</tr>

		<tr>
			<td>Phone Number :</td>
			<td><input type="text" name="phone" value="<?php echo $admin["Phone"]?>"> </td>
			<td><span> <?php echo $err_phone;?> </span></td>

		</tr>
		<tr>
			<td>Gender :</td>
			<td>
			<input type="radio" name="gender" value="Male"<?php if ($admin["Gender"]=="Male") echo "checked";?>>Male
			<input type="radio" name="gender" value="Female"<?php if ($admin["Gender"]=="Female") echo "checked";?>> Female</td>
			<td><span> <?php echo $err_gender;?> </span></td>
		</tr>
		
		<tr>
			<td>Address :</td>
			<td><input type="text" name="address" value="<?php echo $admin["Address"]?>"> </td>
			<td><span> <?php echo $err_address;?> </span></td>
		</tr>
		<tr>
			<td>NID number :</td>
			<td><input type="text" name="nid" value="<?php echo $admin["NID"]?>"> </td>
			<td><span> <?php echo $err_nid;?> </span></td>

		</tr>
		<tr>
			<td>Birth Date :</td>
			<td><input type="text" name="dob" value="<?php echo $admin["DOB"]?>"> </td>
			<td><span> <?php echo $err_dob;?> </span></td>
		</tr>		
		<tr>
			<td align="right"><a class="btn"href="adminDashboard.php">Back</a></td>
			<td align="left"><input class="Button"type="submit" name="update" value="Update"></td>
		</tr>
	</table>
	</form>
	<br><br>
	<table align="center">
		<tr>
			<td colspan="3" align="center"><a class="Button Button1" href="changePassword.php">Change Password</a></td>	
		</tr>
	</table>
	

<?php require_once 'footer.php'; ?>
