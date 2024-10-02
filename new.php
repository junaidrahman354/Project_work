<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = 'imbilalmalik@otlook.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_POST) {
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
    $mail->addAddress($_POST['email'], $_POST['name']);           // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['body'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
