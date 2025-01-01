<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Ustvarimo mail
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->CharSet    = 'UTF-8';
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPDebug  = 2; // Spremenjeno za bolj pregledno izpisovanje
$mail->SMTPAuth   = true;
$mail->Port       = 587;
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPSecure = "tls";

// Gmail poverilnice
$mail->Username = 'task.nest.dsr@gmail.com';
$mail->Password = 'gere vfwu phos szad';

// Kdo pošilja
$mail->setFrom('task.nest.dsr@gmail.com', 'Gal Badrov');

// Kdo prejme
$mail->addAddress("gal.badrov@gmail.com", "gal badrov");

// HTML in plain-text vsebina
$mail->isHTML(true);
$mail->Subject = 'WELCOME TO TASK NEST';
$mail->Body    = "Hello mr.,<br>
Someone created an account using this e-mail. If this was you, we are happy to see you joining our website.<br>
If this was not you, please ignore this message.<br>
This is an automatic message, so <b>do not reply</b>.<br>
Best regards,<br>
<b>Task Nest</b>";
$mail->AltBody = "Hello mr.,\n
Someone created an account using this e-mail. If this was you, we are happy to see you joining our website.\n
If this was not you, please ignore this message.\n
This is an automatic message, so do not reply.\n
Best regards,\n
Task Nest";

try {
    echo "Začenjam pošiljanje...<br>";
    $mail->send();
    echo "Mail je bil poslan!";
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}

?>
