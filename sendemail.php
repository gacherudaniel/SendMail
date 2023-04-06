<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';





if(isset($_POST["send"])){
    $mail =new PHPMailer(true);
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

    $mail->isHTML(true);
    // Set the subject line
    $mail->Subject = $_POST ["subject"];

// Set the body of the message
    $mail->Body = $_POST ["message"];

// Check if the email was sent successfully

   
// Check if the email was sent successfully
    if (!$mail->send()) {
        echo 'Message not sent';
    } else {
        echo 'Message sent!';
    }

}

?>


     
   