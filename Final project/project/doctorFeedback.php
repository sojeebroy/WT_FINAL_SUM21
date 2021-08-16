<?php 
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	include 'controllers/doctorController.php';
	$doctors=getDoctors();
?>
<<!DOCTYPE html>
<html>
<head></head>
<body>
	<br><br>
<h3 align="center">All Doctors Feedback</h3>
<table align="center">
	<thead>
	<th>Id</th>
	<th>Name</th>
	<th></th>
	<th>Feedback</th>

	</thead>
	<tbody>
		<?php 
			$i=1;
			foreach ($doctors as $s){
					echo "<tr>";
					echo "<td>".$s["Id"]."</td>";
					echo "<td>".$s["Name"]."</td>";
					echo "<td></td>";
					echo "<td>".$s["Feedback"]."</td>";
					echo "</tr>";
					$i++;
				}
		?>
	</tbody>
</table>
</body>
</html>