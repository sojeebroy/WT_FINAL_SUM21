<?php 
	require_once 'controllers/studentController.php';	
	require_once 'adminHeader.php';
	$id=$_GET["id"];
	$s=getStudent($id);

?>
	<br><br><br>
	<form action="" method="post">
		<h2 align="center"><?php echo $err_db;?></h2>
	<table align="center">
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="<?php echo $s["Name"];?>"></td>
			
		<tr>
			<td>DOB :</td>
			<td><input type="text" name="dob" value="<?php echo $s["DOB"];?>"></td>
			
		<tr>
			<td>CGPA :</td>
			<td><input type="text" name="cgpa" value="<?php echo $s["CGPA"];?>"></td>
			
		<tr>
			<td>Credit :</td>
			<td><input type="text" name="credit" value="<?php echo $s["Credit"];?>"></td>
			
		</tr>
		<tr>
			<td>Dept Id :</td>
			<td><input type="text" name="dept_id" value="<?php echo $s["Dept_id"];?>"></td>
			
		</tr>
		<tr>
			<td></td><td align="center"><input type="submit" name="EditStudent" value="Edit Student"></td>
		</tr>
	</table>
	</form>
<?php include 'Footer.php';?>