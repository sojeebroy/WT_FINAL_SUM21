<?php
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'controllers/nurseController.php';
	require_once 'header.php';
		$id=$_GET["id"];
	$s=getNurse($id);
	
?>

	<form action="" method="post">
		<h2 align="center"> Reply sent to <?php echo $s["Name"];?></h2>
		<h2 align="center"><?php echo $err_db;?></h2>

		<h3 align="center">Nurse's Request is <?php echo $s["Request"];?> </h3>
		<table align="center">
		<tr>
			<td>Add Message :</td>
			<td><input type="text" name="message"></td>
			<td><span> <?php echo $err_message;?> </span></td>	
		</tr>
		
		<tr>
			<td align="right"><a class="btn" href="nurseRequests.php">Back</a></td>
			<td align="left"><input class="Button" type="submit" name="reply" value="Reply"></td>
		</tr>
	</table>
	</form>
	<script>

	</script>

	<br><br>
<?php require_once 'footer.php'; ?>
