<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$mail = new PHPMailer;

// $mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@passveryfast.co.uk';              // SMTP username
$mail->Password = 'Sal2022@@@!';                          // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@passveryfast.co.uk';
$mail->FromName = 'PassVeryFast';
