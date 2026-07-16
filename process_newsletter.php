<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

configure_session();
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

$csrf_token = $_POST['csrf_token'] ?? '';
if (!verify_csrf_token($csrf_token)) {
    $_SESSION['newsletter_status'] = 'error';
    $_SESSION['newsletter_message'] = 'Invalid form token. Please try again.';
    safe_redirect($_SERVER['HTTP_REFERER'] ?? 'index.php');
    exit();
}

$email = sanitize_email($_POST['email'] ?? '');

if (empty($email) || !is_valid_email($email)) {
    $_SESSION['newsletter_status'] = 'error';
    $_SESSION['newsletter_message'] = 'Please provide a valid email address.';
    safe_redirect($_SERVER['HTTP_REFERER'] ?? 'index.php');
    exit();
}

$dir = dirname($newsletter_storage);
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

$result = file_put_contents($newsletter_storage, $email . PHP_EOL, FILE_APPEND | LOCK_EX);

if ($result === false) {
    error_log("Newsletter: failed to write email: $email");
    $_SESSION['newsletter_status'] = 'error';
    $_SESSION['newsletter_message'] = 'Sorry, there was an error. Please try again later.';
} else {
    $_SESSION['newsletter_status'] = 'success';
    $_SESSION['newsletter_message'] = 'Thank you for subscribing to our newsletter!';
}

safe_redirect($_SERVER['HTTP_REFERER'] ?? 'index.php');
