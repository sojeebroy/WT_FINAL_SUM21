<?php 
	
	include 'controllers/categoryController.php';
	$key=$_GET["key"];
	$category=searchCategory($key);

	if(count($category)>0)
	{
		foreach($category as $c)
		{
			echo "<p>".$c["Name"]."</p>";
		}
	}
?>