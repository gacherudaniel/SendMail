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
    $mail->Username = 'danielgacheru01@gmail.com';                
    $mail->Password = 'rijtdgrqdtnpmivu';                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                    

    $mail->setFrom('danielgacheru01@gmail.com', 'Daniel Gacheru');
    $mail->addAddress('regexmark1@gmail.com', 'Mark Kibocha');     
    $mail->addReplyTo('danielgacheru01@gmail.com', 'Daniel Gacheru');

    $mail->isHTML(true);                                  
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}
