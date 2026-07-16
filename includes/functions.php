<?php

function sanitize_input($data) {
    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function sanitize_email($email) {
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}

function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_valid_phone($phone) {
    return preg_match('/^[+]?[\d\s-]{8,}$/', $phone);
}

function sanitize_for_header($data) {
    return str_replace(["\r", "\n", "\r\n"], '', $data);
}

function start_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token($token) {
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

function configure_session() {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_samesite', 'Lax');
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        ini_set('session.cookie_secure', 1);
    }
}

function safe_redirect($url) {
    global $allowed_redirects;
    $parsed = parse_url($url, PHP_URL_PATH);
    $filename = basename($parsed);
    if (in_array($filename, $allowed_redirects)) {
        header("Location: $filename");
    } else {
        header("Location: index.php");
    }
    exit();
}

function send_security_headers() {
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: SAMEORIGIN");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("X-XSS-Protection: 1; mode=block");
}
