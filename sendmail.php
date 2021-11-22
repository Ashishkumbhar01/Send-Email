<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/Exception.php');

if(isset($_POST['submit'])){

$mail = new PHPMailer(true);

try {
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;

$mail->Username = 'rr0211620@gmail.com';
$mail->Password = 'Rahim@Sahu*1999';

$mail->setFrom('rr0211620@gmail.com', 'Rahim Sahu');
$mail->addAddress($_POST['email']);

$mail->isHTML(true);
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

for($i=0; $i < count($_FILES['file']['tmp_name']); $i++){
$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);
}

$mail->send();

echo "<div class='alert alert-success' role='alert'>Message send has been successfully.</div>";
echo "<script type='text/javascript'> function goPage(){ window.location.href = 'index.php'; } goPage(); </script>";

} catch(Exception $e) {
echo "<div class='alert alert-danger' role='alert'>Message could not be send. Mailer Error:{$mail->ErrorInfo}</div>";
}

}

?>