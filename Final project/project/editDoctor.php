<?php
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'controllers/doctorController.php';
	require_once 'header.php';
	$id=$_GET["id"];
	$s=getDoctor($id);
?>

	<form action="" method="post">
		<h2 align="center"> Update an account.</h2>
		<table align="center">
		<tr>
			<td>Full Name :</td>
			<td><input type="text" name="name" value="<?php echo $s["Name"];?>" ></td>
			<td><span> <?php echo $err_name;?> </span></td>	
		</tr>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="uname" value="<?php echo $s["Username"]?>" ></td>
			<td><span> <?php echo $err_uname;?> </span></td>	
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" value="<?php echo $s["Email"] ?>"> </td>
			<td><span> <?php echo $err_email;?> </span></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="password" value="<?php echo $s["Password"]?>"> </td>
			<td><span> <?php echo $err_password;?> </span></td>
		</tr>
		<tr>
			<td>Phone Number :</td>
			<td><input type="text" name="phone" value="<?php echo $s["Phone"]?>"> </td>
			<td><span> <?php echo $err_phone;?> </span></td>

		</tr>
		<tr>
			<td>Gender :</td>
			<td>
			<input type="radio" name="gender" value="Male"<?php if ($s["Gender"]=="Male") echo "checked";?>>Male
			<input type="radio" name="gender" value="Female"<?php if ($s["Gender"]=="Female") echo "checked";?>> Female</td>
			<td><span> <?php echo $err_gender;?> </span></td>
		</tr>
		<tr>
			<td>Select Department :</td>
			<td>
				<select name="department" value="<?php echo $s["Department"]?>"><option><?php echo $s["Department"]?></option>
              <?php 
  				foreach($dept as $d)
				{
					if($d==$department)
					{echo "<option selected>$d</option>";}
					else
					echo "<option> $d </option>";
  				}
  				?>
             </select>
			</td>
			<td><span> <?php echo $err_department;?> </span></td>
		</tr> 
		<tr>
			<td>Address :</td>
			<td><input type="text" name="address" value="<?php echo $s["Address"]?>"> </td>
			<td><span> <?php echo $err_address;?> </span></td>
		</tr>
		<tr>
			<td>NID number :</td>
			<td><input type="text" name="nid" value="<?php echo $s["NID"]?>"> </td>
			<td><span> <?php echo $err_nid;?> </span></td>

		</tr>
		<tr>
			<td>Birth Date :</td>
			<td><input type="text" name="dob" value="<?php echo $s["DOB"];?>"> </td>
			<td><span> <?php echo $err_dob;?> </span></td>

        </tr>    
		<tr>
			<td>Bio :</td>
			<td><input type="text" name="bio" size="27" value="<?php echo $s["Bio"]?>"> </td>
			<td><span><?php echo $err_bio;?> </span></td>	
		</tr>	
		<tr>
			<td align="right"><a class="btn" href="adminDashboard.php">Back</button></td>
			<td align="left"><input class="Button" type="submit" name="update" value="Update"></td>
		</tr>
	</table>
	</form>
	<br><br>
<?php require_once 'footer.php'; ?>
