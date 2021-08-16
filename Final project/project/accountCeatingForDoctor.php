<?php
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	
	require_once 'controllers/doctorController.php';
	require_once 'header.php';
?>
	<script src="javaScripts/createDoctor.js"></script>
	<h2 align="center"> Create an account.</h2>
	<h3 align="center"><span><?php echo $err_db;?></span></h3>
	<form onsubmit="return validateDoctor()" action="" method="post">
	

		<table align="center">
		<tr>
			<td>Full Name :</td>
			<td><input id="name" type="text" name="name" value="<?php echo $name;?>" ></td>
			<td><span id="err_name"> <?php echo $err_name;?> </span></td>	
		</tr>
		<tr>
			<td>Username :</td>
			<td><input id="uname" type="text" name="uname" value="<?php echo $uname;?>" ></td>
			<td><span id="err_uname"> <?php echo $err_uname;?> </span></td>	
		</tr>
		<tr>
			<td>Email :</td>
			<td><input id="email" type="text" name="email" value="<?php echo $email; ?>"> </td>
			<td><span id="err_email"> <?php echo $err_email;?> </span></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input id="password" type="password" name="password" value="<?php echo $password;?>"> </td>
			<td><span id="err_password"> <?php echo $err_password;?> </span></td>
		</tr>
		<tr>
			<td>Phone Number :</td>
			<td><input id="phone" type="text" name="phone" value="<?php echo $phone;?>"> </td>
			<td><span id="err_phone"> <?php echo $err_phone;?> </span></td>

		</tr>
		<tr>
			<td>Gender :</td>
			<td>
			<input id="Male" type="radio" name="gender" value="Male"<?php if($gender=="Male") echo "checked";?>>Male
			<input id="Female" type="radio" name="gender" value="Female"<?php if($gender=="Female") echo "checked";?>> Female</td>
			<td><span id="err_gen"> <?php echo $err_gender;?> </span></td>
		</tr>
		<tr>
			<td>Select Department :</td>
			<td>
				<select id="department" name="department"><option disabled selected>---Select---</option>
              <?php 
  				foreach($dept as $d)
				{
					if($d==$department)
					{echo "<option selected>$d</option>";}
					else
					echo "<option> $d </option>";
  				}?>
             </select>
			</td>
			<td><span id="err_dept"> <?php echo $err_department;?> </span></td>
		</tr> 
		<tr>
			<td>Address :</td>
			<td><input id="address" type="text" name="address" value="<?php echo $address;?>"> </td>
			<td><span id="err_address"> <?php echo $err_address;?> </span></td>
		</tr>
		<tr>
			<td>NID number :</td>
			<td><input id="nid" type="text" name="nid" value="<?php echo $nid;?>"> </td>
			<td><span id="err_nid"> <?php echo $err_nid;?> </span></td>

		</tr>
		<tr>
			<td>Birth Date :</td>
			<td><select id="date" name="date"><option disabled selected>Date</option>  
	         <?php
                foreach(range(1,31) as $i)
                { if($i==$date)
                	{echo "<option selected>$i</option>";}
            	else
                { echo "<option> $i </option>";}
                }?>
             </select>

             <select id="month" name="month"> <option disabled selected>Month</option>

              <?php 
  				foreach($array as $p)
				{
					if($p==$month)
					{echo "<option selected>$p</option>";}
					else
					echo "<option> $p </option>";
  				}?>
			 
             </select>
             <select id="year" name="year">
              <option disabled selected>Year</option>
              <?php
               foreach(range(1940,2021) as $j)
               {	if($j==$year)
               		{echo "<option selected>$j</option>";}
               		else {echo "<option> $j </option>";}
               }?>

			</select>				
			</td>
			<td><span id="err_dating"> <?php echo $err_dating;?></span>
            <span id="err_month"><?php echo $err_month;?></span>
            <span id="err_year"><?php echo $err_year;?> </span></td>
		</tr>
		<tr>
			<td>Bio :</td>
			<td><textarea id="bio" name="bio" ><?php echo $bio; ?></textarea></td>	
			<td><span id="err_bio"><?php echo $err_bio;?> </span></td>	
		</tr>	
		<tr>
			<td align="right"><a class="btn btn3" href="adminDashboard.php">Back</a></td>
			<td align="left"><input class="Button" type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
	</form>
	<br><br>
<?php require_once 'footer.php'; ?>
