<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';




// URL: https://mail.vmx.link
// Username: mailto:freeqrcodes@vmx.link
// Pass: os(*2EU853#zubrK

// IMAP Information
// Incoming Server: mail.vmx.link
// Port: 143 (Security: none)

// Outgoing server: mail.vmx.link
// Port: 25 (Security: none)/ 465 (Security: SSL)


function sendMail($to, $subject, $body)
{
  $mail = new PHPMailer(true);

  try {
    $mail->SMTPSecure = 465;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Commented out for production
    $mail->isSMTP();
    $mail->Host       = 'mail.vmx.link';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'freeqrcodes@vmx.link';
    $mail->Password   = 'os(*2EU853#zubrK'; // Use your App Password here
    $mail->Port       = 25;

    $mail->setFrom('freeqrcodes@vmx.link', 'FreeQRCodes');
    $mail->addAddress($to);

    $mail->isHTML(true);
    $mail->Subject =  $subject;
    $mail->Body    =  $body;
    $mail->AltBody = 'Empty';

    $mail->send();
    return true;
  } catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return false;
  }
}
