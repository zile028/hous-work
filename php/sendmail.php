<?php
include 'configmail.php';
require_once 'PHPMailer/PHPMailerAutoload.php';

$myemail='user name';
$mypass='password';
$serv='gmail';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = mail_server($serv)['host'];
$mail->SMTPAuth = true;
$mail->Username = $myemail;
$mail->Password = $mypass;
$mail->SMTPSecure = mail_server($serv)['smtpSecure'];
$mail->Port = mail_server($serv)['port'];
$mail->CharSet = "UTF-8";
//$mail->SMTPDebug  = 0;

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$mail->setFrom($myemail,"Дејан Живковић");
$mail->addAddress($email);
$mail->addBCC($myemail);

    
    $mail->isHTML(true);
    $mail->Body='<p align=left><b>Name:</b>' . $name . '</p>' .
    						'<p align=left><b>E-mail:</b>' . $email . '</p>' .
    						'<p align=left><b>Message:</b>' . $message . '</p>';

    if (!$mail->send()) {
      echo "Message not sent.";
    }else{
      echo 'The message was sent successfully. Thanks for contacting us.';
    }

?>