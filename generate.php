<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
error_reporting(0);
session_start();
if($_POST['num']>0)
{
$number=$_POST['num'];
        $msg=rand(1111,9999);
        echo $msg;
        echo $number;
        $_SESSION["mnumber"]=$number;
        $_SESSION["mobileotp"]=$msg;

$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "$msg",
    "language" => "english",
    "route" => "p",
    "numbers" => "$number",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization:ym1PaJUKLofT3MB4ceDipuX7h0IjzdbWV6n8lsQHRg9GE5qOxNrkMjNZwDXxivnPuByAS5pFWC274LgK",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
 }
else
{
    $email=$_POST['mail'];
    // $email=$_GET["email"];
    echo $email;
   
    $otp=rand(1111, 9999);
    echo $otp;
    $_SESSION["mailotp"]="$otp";
    $_SESSION["email"]="$email";
    $html="your otp verification code is".$otp;
    smtp_mailer($email, 'otp verification', $html);


    function smtp_mailer($to, $subject, $msg)
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
    
        if ($mail->send()) {
            echo "OTP has been sent to you email address!";
        } else {
            echo "0";
        }
    }
}
?>