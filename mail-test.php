<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = false;
$mail->Username = 'info@passveryfast.co.uk';
$mail->Password = 'Sal2022@@@!';

$email = 'imbilalmalik@outook.com';
$full_name = 'Bilal';
$back_office_link = "http://passveryfast.co.uk/login.php";
$user_id = 1;
$logo_link = "http://passveryfast.co.uk/img/Logopit_1662967017241.png";
$user_name = 'usman';
$password1 = '1122';
$company_name = 'comany';
//To address and name
$mail->addAddress($email, $full_name);
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("info@passveryfast.co.uk", "Reply");
$mail->SMTPDebug  = 1;
//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Welcome";
$mail->Body = 'this ';

if (!$mail->send()) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent!';
}
