<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exeption;
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
//$mail->SMTPDebug = 3;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.rambler.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testiviitestdev@rambler.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Sy1yTftO&Ep1'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('testiviitestdev@rambler.ru'); // от кого будет уходить письмо?
$mail->addAddress('testiviitestdev@rambler.ru');     // Кому будет уходить письмо
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Новое обращение с формы обратной связи';
$mail->Body    = '' .$name. ' оставил новое обращение ' . '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Ошибка отправки сообщения';
}
