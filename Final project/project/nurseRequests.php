<?php 
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'adminHeader.php';
	require_once 'controllers/nurseController.php';

	$nurses=getNurses();

?>
<br><br>
<h3 align="center">All Nurses Requests</h3>
<table align="center">
	<thead>
	<th>Id</th>
	<th>Name</th>
	<th>Requests</th>

	</thead>
	<tbody>
		<?php 
			$i=1;
			foreach ($nurses as $n){
					echo "<tr>";
					echo "<td>".$n["Id"]."</td>";
					echo "<td>".$n["Name"]."</td>";
					echo "<td>".$n["Request"]."</td>";
					echo '<td><a class="Button Button1" href="replyNurse.php?id='.$n["Id"].'">Reply to Nurse</a></td>';
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