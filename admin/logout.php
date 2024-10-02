<?php
include 'connection.php';
	session_destroy(); 
	unset($_SESSION['admin_id']);
	header("location:index.php");
?>