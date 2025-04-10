<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if POST data is set
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP settings (customize these)
        $mail->isSMTP();
        $mail->Host       = 'mail.evansgasinstallation.co.ke'; // your SMTP host
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cronjob@evansgasinstallation.co.ke';   // SMTP username
        $mail->Password   = 'johnathan&nathaniel';    // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email content
        $mail->setFrom($email, $name);
        $mail->addAddress('admin@evansgasinstallation.co.ke'); // where the message will go

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Evanx Cooling System Website</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .email-container {
      max-width: 600px;
      margin: 30px auto;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .email-header {
      background-color: #007bff;
      color: white;
      padding: 20px;
      text-align: center;
    }
    .email-body {
      padding: 30px;
      color: #333;
    }
    .email-body h2 {
      margin-top: 0;
      color: #007bff;
    }
    .email-details {
      margin: 20px 0;
    }
    .email-details p {
      margin: 5px 0;
      font-size: 16px;
    }
    .email-footer {
      background-color: #f0f0f0;
      padding: 15px;
      text-align: center;
      font-size: 14px;
      color: #888;
    }
  </style>
</head>
<body>
  <div class='email-container'>
    <div class='email-header'>
      <h1>📬 New Message</h1>
    </div>
    <div class='email-body'>
      <h2>You've received a message from your website</h2>
      <div class='email-details'>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong><br>{$message}</p>
      </div>
    </div>
    <div class='email-footer'>
      This message was sent from your website contact form.
    </div>
  </div>
</body>
</html>";

        $mail->send();

        echo json_encode(['status' => 'success', 'message' => 'Message has been sent successfully.']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
