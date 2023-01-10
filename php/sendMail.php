<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if(isset($_POST['send'])){

$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='gabidumea59@gmail.com';
$mail->Password='pvbqwqwapfwpsiqz';
$mail->SMTPSecure='ssl';
$mail->Port=465;

$mail->setFrom('gabidumea59@gmail.com');

$mail->addAddress($_SESSION['mailOwner']);
$mail->isHTML(true);
$mail->Subject=$_SESSION['subject'];
$mail->Body=$_POST['mesaj'];

$mail->send();
}
unset($_SESSION['mailOwner']);
unset($_SESSION['subject']);
header('location:../homepage.php');
?>