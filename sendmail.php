<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'your_email@example.com';                
    $mail->Password = 'input app password here';                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                    

    $mail->setFrom('your_email@example.com', 'YOUR NAME');
    $mail->addAddress('recipient_email@example.com', 'Recipients name');     
    $mail->addReplyTo('your_email@example.com', 'YOUR NAME');

    $mail->isHTML(true);                                  
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}