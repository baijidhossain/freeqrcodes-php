<?php

session_start();

require 'PHPMailer/autoload.php';

// Google reCAPTCHA secret key
$secretKey = '6Le7PbcqAAAAAO8_E0lNGv68aAgHG_jy8evZIaQ6';

// Get the reCAPTCHA response
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
$remoteIp = $_SERVER['REMOTE_ADDR'];

// Verify reCAPTCHA
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse&remoteip=$remoteIp");
$responseKeys = json_decode($response, true);

// Check if reCAPTCHA verification was successful
if (intval($responseKeys["success"]) !== 1) {
  $_SESSION['errors']['recaptcha'] = "Please complete the reCAPTCHA verification.";
  header('Location: https://freeqrcodes.baijid.com.bd/contact.html');
  exit;
}

// Validate and sanitize inputs
$errors = [];

$name = htmlspecialchars($_POST['name'] ?? "", ENT_QUOTES, 'UTF-8');
$email = filter_var($_POST['email'] ?? "", FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars($_POST['phone'] ?? "", ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($_POST['subject'] ?? "", ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'] ?? "", ENT_QUOTES, 'UTF-8');

// Check for empty fields
if (empty($name)) {
  $errors['name'] = "Name field is required.";
}

if (empty($email)) {
  $errors['email'] = "Email field is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = "Invalid email subject.";
}

if (empty($phone)) {
  $errors['phone'] = "Phone field is required.";
}

if (empty($subject)) {
  $errors['subject'] = "subject field is required.";
}

if (empty($message)) {
  $errors['message'] = "Message field is required.";
}

if (!empty($errors)) {
  $_SESSION['errors'] = $errors;
  header('Location:'.$APP_URL.'/contact.html');
  exit;
}

// Create the HTML email content
$fullMessage = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Contact From Free QR Codes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .container { width: 90%; margin: 0 auto; padding: 20px; }
        .header { padding: 7px; text-align: center; }
        .content { background-color: #ffffff; padding: 20px; border: 1px solid #dddddd; }
        .footer { background-color: #f4f4f4; padding: 10px; text-align: center; font-size: 0.9em; }
        .label { font-weight: bold; }
        .value { margin-left: 5px; }
    </style>
</head>

<body>
    <div class='container'>

        <div class='header'>
            <h1>Contact From Free QR Codes</h1>
        </div>

        <div class='content'>

             <p><span class='label'>Name:</span> <span class='value'>".ucwords($name)."</span></p>
             <p><span class='label'>Email:</span> <span class='value'>".$email."</span></p>
             <p><span class='label'>Phone:</span> <span class='value'>".$phone."</span></p>
             <p><span class='label'>Subject:</span> <span class='value'>".$subject."</span></p>
             <p><span class='label'>Message:</span> <span class='value'>".$message."</span></p>
        
        </div>

    </div>

</body>

</html> ";

// Send email
$mailSent = sendMail('info@alpha.net.bd', 'Contact From Free QR Codes', $fullMessage, 'text/html');

// Redirect based on the result
if ($mailSent) {
  $_SESSION['success'] = "Message sent successfully!";
} else {
  $_SESSION['success'] = "Message sending failed!";
}
header('Location:'.$APP_URL.'/contact.html');
exit;