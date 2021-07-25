<?php require_once 'adminHeader.php';?>
<?php require_once 'controllers/studentController.php';
$students=getStudents();
?>
<br><br><br>
<h3 align="center">All Students</h3>
<table align="center">
	<thead>
	<th>Id</th>
	<th>Name</th>
	<th>DOB</th>
	<th>Credit</th>
	<th>CGPA</th>
	<th>Dept id</th>
	</thead>
	<tbody>
		<?php 
			$i=1;
			foreach ($students as $s) {
					echo "<tr>";
					echo "<td>".$s["Id"]."</td>";
					echo "<td>".$s["Name"]."</td>";
					echo "<td>".$s["DOB"]."</td>";
					echo "<td>".$s["Credit"]."</td>";
					echo "<td>".$s["CGPA"]."</td>";
					echo "<td>".$s["Dept_id"]."</td>";
					echo '<td><button><a href="editStudent.php?id='.$s["Id"].'">Edit</a></button></td>';
					echo '<td><button>Delete</button>';
					echo "</tr>";
					$i++;
			}
		?>
	</tbody>
</table>
<?php require_once 'Footer.php';?>