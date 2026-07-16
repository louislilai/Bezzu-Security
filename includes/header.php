<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

configure_session();
send_security_headers();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$csrf_token = start_csrf_token();

$page_title = isset($page_title) ? $page_title . ' | ' . $site_name : $site_name . ' - Professional Security Services';
$page_description = isset($page_description) ? $page_description : 'Bezzu Security - Professional security services in Tanzania, offering corporate, residential, and executive protection services.';

$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="index, follow">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>

    <meta property="og:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $site_url ?>">
    <meta property="og:image" content="<?= $site_url ?>/images/bezzu.png">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/png" sizes="32x32" href="images/bezzu.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/bezzu.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/bezzu.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/bezzu.png">
    <link rel="icon" type="image/png" sizes="512x512" href="images/bezzu.png">
    <meta name="msapplication-TileImage" content="images/bezzu.png">
    <meta name="msapplication-TileColor" content="#0a1628">
    <meta name="theme-color" content="#0a1628">

    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="page-loader" aria-hidden="true">
        <div class="loader-content">
            <div class="loader-ring"></div>
            <img src="images/bezzu.png" alt="" class="loader-logo">
        </div>
    </div>

    <header class="main-header" role="banner">
        <a class="header-logo" href="index.php" aria-label="Bezzu Security Home">
            <img src="images/bezzu.png" alt="Bezzu Security Logo">
            <div class="header-logo-text">
                <span class="header-logo-name">Bezzu Security</span>
                <span class="header-logo-tagline">Professional Security Services</span>
            </div>
        </a>

        <nav class="main-nav" id="mainNav" aria-label="Main navigation">
            <ul class="main-nav-list">
                <li><a class="main-nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a></li>
                <li><a class="main-nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>" href="about.php">About Us</a></li>
                <li><a class="main-nav-link <?php echo $current_page == 'services.php' ? 'active' : ''; ?>" href="services.php">Services</a></li>
                <li><a class="main-nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                <li><a class="main-nav-link <?php echo $current_page == 'blog.php' ? 'active' : ''; ?>" href="blog.php">Blog</a></li>
                <li class="nav-cta-li"><a href="contact.php" class="btn btn-accent nav-cta-btn">Get a Quote</a></li>
            </ul>
        </nav>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>

    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-menu-list">
            <li><a class="mobile-menu-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a></li>
            <li><a class="mobile-menu-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>" href="about.php">About Us</a></li>
            <li><a class="mobile-menu-link <?php echo $current_page == 'services.php' ? 'active' : ''; ?>" href="services.php">Services</a></li>
            <li><a class="mobile-menu-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
            <li><a class="mobile-menu-link <?php echo $current_page == 'blog.php' ? 'active' : ''; ?>" href="blog.php">Blog</a></li>
        </ul>
        <div class="mobile-menu-cta">
            <a href="contact.php" class="btn btn-accent">Get a Quote</a>
        </div>
    </div>

    <main id="main-content">
