<?php
	require_once 'controllers/nurseController.php';
	$id=$_GET["id"];
	$n=deleteNurse($id);
	header("Location: allNurses.php");
?>
