<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'stefanmaeschi@gmail.com';                     //SMTP username
    $mail->Password   = '*********';                           //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 

    //Recipients
    $mail->setFrom('stefanmaeschi@gmail.com', 'Mailer');
    $mail->addAddress('stefanmaeschi@gmail.com', 'Joe User');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Mail - FitnessDAW';
    $mail->Body    = '<h1>Mail from FitnessDAW</h1>
                      <p>From: '.$_POST['name'].'</p>
                      <p>Email: '.$_POST['email'].'</p>
                      <p>Subject: '.$_POST['subject'].'</p>
                      <p>Message: '.$_POST['message'].'</p>';
    
    $mail->send();
    header("location: ../index.php?mailsend");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
