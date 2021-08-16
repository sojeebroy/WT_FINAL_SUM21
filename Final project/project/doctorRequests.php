<?php 
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'adminHeader.php';
	require_once 'controllers/doctorController.php';

	$doctors=getDoctors();

?>
<br><br>
<h3 align="center">All Doctors Requests</h3>
<table align="center">
	<thead>
	<th>Id</th>
	<th>Name</th>
	<th>Requests</th>

	</thead>
	<tbody>
		<?php 
			$i=1;
			foreach ($doctors as $s){
					echo "<tr>";
					echo "<td>".$s["Id"]."</td>";
					echo "<td>".$s["Name"]."</td>";
					echo "<td>".$s["Request"]."</td>";
					echo '<td><a class="Button Button1" href="replyDoctor.php?id='.$s["Id"].'">Reply to Doctor</a></td>';
					echo "</tr>";
					$i++;
				}
		?>
	</tbody>
</table>
<table align="center">
	<tr><td><a class="btn" href="adminDashboard.php"> Back</a></td></tr>
</table>

<?php require_once 'Footer.php';?>