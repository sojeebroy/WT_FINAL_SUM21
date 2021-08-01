<?php include 'admin_header.php';?>
<?php 
	include 'controllers/categoryController.php';
?>
<form action="" method="post">
		<h3 align="center"><?php echo $err_db;?></h3>
<table align="center">
	<tr>
		<td>Name :</td>
	</tr>
	<tr>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td><input type="submit" name="add_category" value="Add Category"></td>
	</tr>
</table>

</form>

<?php include 'footer.php';?>