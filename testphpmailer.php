<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'testeemail@ms-engsolucoes.com.br';
$mail->Password = 'Teste1234@';
$mail->setFrom('testeemail@ms-engsolucoes.com.br', 'Your Name');
$mail->addReplyTo('testeemail@ms-engsolucoes.com.br', 'Your Name');
$mail->addAddress('testeemail@ms-engsolucoes.com.br', 'Receiver Name');
$mail->Subject = 'Testing PHPMailer';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>