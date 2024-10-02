<?php
include 'connection.php';
	session_destroy(); 
	unset($_SESSION['instructor_id']);
	header("location:login.php");
?>