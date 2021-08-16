<?php 
	session_start();
	if(!isset($_SESSION["loggedUser"]))
	{
		header("Location: login.php");
	}
	require_once 'adminHeader.php';
	require_once 'controllers/patientController.php';

	$patients=getPatients();
?>
	<script>
		function Download(){
			alert("The File is Downloaded !!");
		}
	</script>
<br><br>
<h3 align="center">All Patients</h3>
<table align="center">
	<thead>
	<th>Id</th>
	<th>Name</th>
	<th>Report</th>

	</thead>
	<tbody>
		<?php 
			$i=1;
			foreach ($patients as $s){
					echo "<tr>";
					echo "<td>".$s["Id"]."</td>";
					echo "<td>".$s["Name"]."</td>";
					echo "<td>".$s["Report"]."</td>";
					
					echo '<td><a class="Button" href="uploadReport.php?id='.$s["Id"].'">Upload</a></td>';
					echo '<td><button class="Button Button1" onclick="Download()">Download</button></td>';
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