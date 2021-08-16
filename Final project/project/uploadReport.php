<?php
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'controllers/patientController.php';
	require_once 'header.php';
		$id=$_GET["id"];
	$s=getPatient($id);
	$patientName=$s["Name"];
	setcookie("pname",$patientName,time()+600,"/");
?>

	<form action="" method="post">
		<h2 align="center"> Report upload of <?php echo $_COOKIE["pname"];?></h2>
		<h2 align="center"><?php echo $err_db;?></h2>
		<table align="center">
		<tr>
			<td>Report Name :</td>
			<td><input type="text" name="report" value="<?php echo $s["Report"];?>" ></td>
			<td><span> <?php echo $err_report;?> </span></td>	
		</tr>
		
		<tr>
			<td align="right"><a class="btn" href="generateReport.php">Back</a></td>
			<td align="left"><input class="Button" type="submit" name="upload" value="Upload"></td>
		</tr>
	</table>
	</form>
	<br><br>
<?php require_once 'footer.php'; ?>
