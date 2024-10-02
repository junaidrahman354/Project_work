<?php
session_start();
ob_start();
// $con = mysqli_connect("localhost","root","","passvery_driving_school");
$con = mysqli_connect("localhost", "root", "", "passvery_ds_new");
if (!$con) {
	echo mysqli_error($con);
}

use PHPMailer\PHPMailer\PHPMailer;

 
 
	require 'vendor/autoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.hostinger.com';
	$mail->Port = 587;
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;
	$mail->Username = 'info@passveryfast.co.uk';
	$mail->Password = 'Sal2022@@@!';

 
 

$instructor_link = "https://passveryfast.co.uk/instructor/login.php";
$web_link = "https://passveryfast.co.uk/";
$student_aprove_link = "https://passveryfast.co.uk/login.php?code=";
$instructor_aprove_link = "https://passveryfast.co.uk/instructor/login.php?code=";
$logo = "https://passveryfast.co.uk/img/Logo.png";
$web_title = "PassVeryFast";
$noreply_email = "info@passveryfast.co.uk";

function error($alert, $message)
{
	return '<div class="mb-3 alert alert-' . $alert . '">' . $message . '</div>';
}
