<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';

    // Load the HTML template
    $template = file_get_contents('mail_template.html');

    // Replace placeholders
    $htmlBody = str_replace(
        ['{{sender_name}}', '{{sender_email}}', '{{sender_mobile}}', '{{sender_service}}', '{{sender_message}}', '{{current_year}}'],
        [$name, $email, $mobile, $service, nl2br($message), date('Y')],
        $template
    );

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'mail.evanxcoolingsystems.co.ke';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@evanxcoolingsystems.co.ke';
        $mail->Password   = 'info@Evanx'; // Replace with real SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email headers
        $mail->setFrom($email, $name);
        $mail->addAddress('info@evanxcoolingsystems.co.ke',"Isaac");
        $mail->addCC("jablessions76@gmail.com", "Isaac Nyamari");
        $mail->isHTML(true);
        $mail->Subject = "New Quote Request from $name";
        $mail->Body    = $htmlBody;

        if ($mail->send()) {

            echo json_encode([
                'status' => 'success',
                'message' => 'Quotation sent successfully!'
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => "Mailer Error: " . $mail->ErrorInfo
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request'
    ]);
}
