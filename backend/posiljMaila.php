<?php

//importamo php mailer za posiljanje mailov
use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

//ustvarimo mail
$mail = new PHPMailer();

$mail->isSendmail();

//kdo posilja
$mail->setFrom('from@example.com', 'First Last');

//kdo prejme
$mail->addAddress('whoto@example.com', 'John Doe');


//zadeva:
$mail->Subject = 'WELCOME TO TASK NEST';

//text v mailu
$name = $_POST['name'];
$surname = $_POST['surname'];

$mail->AltBody = "Hello mr. $name $surname,\n
Someone created account using this e-mail. If this was you, we are happy to see you joining our website. \n
If this was not you, please ignore this message. \n
This is automatic message, so do not reply. \n
Best regards, \n
Task Nest \n";



//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>