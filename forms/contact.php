<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.exemple.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLLS;
$mail->Port = 587;

$mail->setForm($mail, $name);
$mail->addAddress("nurudinrasyid09@gmail.com", "Rasyid");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "Email Sent!";