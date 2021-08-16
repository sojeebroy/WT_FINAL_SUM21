<?php
	require_once 'controllers/patientController.php';
	$id=$_GET["id"];
	$n=deletePatient($id);
	header("Location: allPatients.php");
?>
