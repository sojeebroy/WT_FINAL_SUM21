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
<h3 align="center">All Doctors</h3>
<table align="center">
	<thead>
	<th>Id</th>
	<th>Name</th>
	<th>Username</th>
	<th>Email</th>
	<th>Password</th>
	<th>Phone Number</th>
	<th>Gender</th>
	<th>Department</th>
	<th>Address</th>
	<th>NID Number</th>
	<th>DOB</th>
	<th>Bio</th>

	</thead>
	<tbody>
		<?php 
			$i=1;
			foreach ($doctors as $s){
					echo "<tr>";
					echo "<td>".$s["Id"]."</td>";
					echo "<td>".$s["Name"]."</td>";
					echo "<td>".$s["Username"]."</td>";
					echo "<td>".$s["Email"]."</td>";
					echo "<td>".$s["Password"]."</td>";
					echo "<td>".$s["Phone"]."</td>";
					echo "<td>".$s["Gender"]."</td>";
					echo "<td>".$s["Department"]."</td>";
					echo "<td>".$s["Address"]."</td>";
					echo "<td>".$s["NID"]."</td>";
					echo "<td>".$s["DOB"]."</td>";
					echo "<td>".$s["Bio"]."</td>";
					echo '<td><a class="Button" href="editDoctor.php?id='.$s["Id"].'">Edit</a></td>';
					echo '<td><a class="Button Button1" href="deleteDoctor.php?id='.$s["Id"].'">Delete</a></td>';


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