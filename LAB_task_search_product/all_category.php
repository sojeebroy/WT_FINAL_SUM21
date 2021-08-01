<?php include 'admin_header.php';
include 'controllers/categoryController.php';
	$categories = getAllCategories();
?>

	<h3 class="text">All Categories</h3>
<input type="text" placeholder="Search..." onkeyup="searchCategory(this)">
<div id="suggesstion"></div>

<table>
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th></th>
		</thead>
<tbody>
<?php
				$i = 1;
				foreach($categories as $c){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["Name"]."</td>";
						echo '<td><a href="editcategory.php?id='.$c["Id"].'" class="btn btn-success">Edit</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>	
<script src="category.js"></script> 
<?php include 'footer.php';?>