<?php 
	session_start();
	session_unset($_SESSION["uname"]);
	session_destroy();
	header("Location: login.php");
?>