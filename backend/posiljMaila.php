<?php

//importamo php mailer za posiljanje mailov
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require 'Exception.php';
//require 'PHPMailer.php';
//require 'SMTP.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//ustvarimo mail
$mail = new PHPMailer();

$mail->IsSMTP();

$mail->CharSet = 'UTF-8';
$mail->Host       = "smtp.gmail.com";
$mail->SMTPDebug  = 3;
$mail->SMTPAuth   = true;
$mail->Port       = 587;

//kdo posilja
//moj email --> od strani
//task.nest.dsr@gmail.com
//passowrd: Tasknestdsr

$mail->Username = 'task.nest.dsr@gmail.com';
$mail->Password = 'gere vfwu phos szad';

$mail->SMTPSecure = "tls";  

//mail za to je:
$mail->setFrom('task.nest.dsr@gmail.com', 'Gal Badrov');

//kdo prejme
$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
echo("$email");
$mail->addAddress("$email", "$name $surname");
$mail->isHTML(true);


//zadeva:
$mail->Subject = 'WELCOME TO TASK NEST';

//text v mailu
$mail->Body    = "Hello mr. $name $surname,\n
Someone created account using this e-mail. If this was you, we are happy to see you joining our website. \n
If this was not you, please ignore this message. \n
This is automatic message, so <b>do not reply</b>. \n
Best regards, \n
<b>Task Nest</b> \n";

$mail->AltBody = "Hello mr. $name $surname,\n
Someone created account using this e-mail. If this was you, we are happy to see you joining our website. \n
If this was not you, please ignore this message. \n
This is automatic message, so do not reply. \n
Best regards, \n
Task Nest \n";

echo("zacenjanje posiljanja");

//posljemo message, preverimo za napake
try {
	$mail->send();
	echo "Mail je bil poslan!";
}
catch (Exception $e) {
	echo "Mailer Error: {$mail->ErrorInfo}";
}
?>