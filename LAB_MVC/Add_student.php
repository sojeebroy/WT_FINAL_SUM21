<?php 
	include 'controllers/studentController.php';	
	include 'adminHeader.php';

?>
	<br><br><br>
	<form action="" method="post">
		<h3 align="center"><?php echo $err_db;?></h3>
	<table align="center">
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			<td><span><?php echo $err_name;?></span></td>
		<tr>
			<td>DOB :</td>
			<td><input type="text" name="dob" value="<?php echo $dob;?>"></td>
			<td><span><?php echo $err_dob;?></span></td>
		<tr>
			<td>CGPA :</td>
			<td><input type="text" name="cgpa" value="<?php echo $cgpa;?>"></td>
			<td><span><?php echo $err_cgpa;?></span></td>
		<tr>
			<td>Credit :</td>
			<td><input type="text" name="credit" value="<?php echo $credit;?>"></td>
			<td><span><?php echo $err_credit;?></span></td>
		</tr>
		<tr>
			<td>Dept Id :</td>
			<td><input type="text" name="dept_id" value="<?php echo $dept_id;?>"></td>
			<td><span><?php echo $err_dept_id;?></span></td>
		</tr>
		<tr>
			<td></td><td align="center"><input type="submit" name="Add_student" value="AddStudent"></td>
		</tr>
	</table>
	</form>
<?php include 'Footer.php';?>