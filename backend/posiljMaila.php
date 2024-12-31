<?php

//importamo php mailer za posiljanje mailov
use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

//ustvarimo mail
$mail = new PHPMailer();

$mail->isSendmail();


?>