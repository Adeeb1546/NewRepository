<?php








require 'mailerClass/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "smartadib982@gmail.com";
$mail->Password = "change982";
$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->setFrom('smartadib982@gmail.com', 'Adeeb.cf');
$mail->AltBody = 'Email Sent From Adeeb bhaiya ki website';

?>
