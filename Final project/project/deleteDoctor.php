<?php
	require_once 'controllers/doctorController.php';
	$id=$_GET["id"];
	$d=deleteDoctor($id);
	header("Location: allDoctors.php");

?>
