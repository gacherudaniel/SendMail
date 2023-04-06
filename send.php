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
    $mail->Username = 'danielgacheru01@gmail.com';                
    $mail->Password = 'rijtdgrqdtnpmivu';                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;
    
   

    $mail->setFrom('danielgacheru01@gmail.com', 'Daniel Gacheru');
    $mail->addAddress('regexmark1@gmail.com', 'Mark Kibocha');

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


     
   
