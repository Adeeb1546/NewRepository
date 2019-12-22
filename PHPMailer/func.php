<?php function SendMail($address,$subject,$content)
{
 include'mailconfig.php';
 $content = "<center><div>$content</div></center>";
 $mail->addAddress($address, $address);
 $mail->Subject = $subject;
 $mail->Body = $content;
$mail->addCustomHeader('X-custom-header', 'custom-value');
 if (!$mail->send())
  {

    return $mail->ErrorInfo;
 }
 else  
    {
            //Logex("Emails","Email Sent To : $address Subject : $subject");
            return $result = 1;
 }
}