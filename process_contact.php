<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

configure_session();
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit();
}

$csrf_token = $_POST['csrf_token'] ?? '';
if (!verify_csrf_token($csrf_token)) {
    $_SESSION['contact_status'] = 'error';
    $_SESSION['contact_message'] = 'Invalid form token. Please try again.';
    header("Location: contact.php#contact-form");
    exit();
}

$name = sanitize_input($_POST['name'] ?? '');
$email = sanitize_email($_POST['email'] ?? '');
$phone = sanitize_input($_POST['phone'] ?? '');
$service = sanitize_input($_POST['service'] ?? '');
$message = sanitize_input($_POST['message'] ?? '');

$errors = [];

if (empty($name)) {
    $errors[] = "Name is required";
}

if (empty($email) || !is_valid_email($email)) {
    $errors[] = "Valid email is required";
}

if (empty($phone) || !is_valid_phone($phone)) {
    $errors[] = "Valid phone number is required";
}

if (empty($message)) {
    $errors[] = "Message is required";
}

if (!empty($errors)) {
    $_SESSION['contact_status'] = 'error';
    $_SESSION['contact_message'] = 'Please correct the following errors: ' . implode(', ', $errors);
    header("Location: contact.php#contact-form");
    exit();
}

$safe_name = sanitize_for_header($name);
$safe_email = sanitize_for_header($email);

$to = $site_email;
$subject = "New Contact Form Submission - $site_name";

$email_content = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; }
        .header { background: #1a237e; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f5f5f5; }
        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
        </div>
        <div class='content'>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            " . (!empty($service) ? "<p><strong>Service Interest:</strong> $service</p>" : "") . "
            <p><strong>Message:</strong><br>$message</p>
        </div>
        <div class='footer'>
            <p>This email was sent from the contact form at $site_name website.</p>
        </div>
    </div>
</body>
</html>";

$headers = [];
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=UTF-8";
$headers[] = "From: $site_name Website <noreply@bezzusecurity.co.tz>";
$headers[] = "Reply-To: $safe_name <$safe_email>";

if (mail($to, $subject, $email_content, implode("\r\n", $headers))) {
    $_SESSION['contact_status'] = 'success';
    $_SESSION['contact_message'] = 'Thank you for your message. We will get back to you soon!';
} else {
    error_log("Contact form mail() failed for: $safe_name <$safe_email>");
    $_SESSION['contact_status'] = 'error';
    $_SESSION['contact_message'] = 'Sorry, there was an error sending your message. Please try again later.';
}

header("Location: contact.php#contact-form");
exit();
