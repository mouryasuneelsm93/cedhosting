<?php
session_start();
error_reporting(0);
$email=$_POST['mail'];



use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

// $email=$_GET["email"];
// echo $email;
$_SESSION["email"]="$email";
$otp2=rand(1111,9999);
$_SESSION['eotp']=$otp2;
echo $otp2;

 
$html="your otp verification code is".$otp2;
smtp_mailer($email,'otp verification',$html);


function smtp_mailer($to,$subject,$msg)
{
require 'vendor/autoload.php'; 
  
    $mail = new PHPMailer(true);                                 
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com;';                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'mouryasuneelsm.sm93@gmail.com';                  
    $mail->Password   = 'stronghai123@';                         
    $mail->SMTPSecure = 'tls';    
                              
    $mail->Port       = 587;   
  
    $mail->setFrom('mouryasuneelsm.sm93@gmail.com', 'Suneel Mourya');            
    $mail->addAddress($to); 
    
    $mail->isHTML(true);                                   
    $mail->Subject = $subject; 
    $mail->Body    = $msg; 
    
    if($mail->send())
    { 
    echo "OTP has been sent to you email address!"; 
    }
    else
    {
        echo "0"; 
    }
    
}



?>

?>