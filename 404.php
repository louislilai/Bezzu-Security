<?php
$page_title = 'Page Not Found';
$page_description = 'The page you are looking for does not exist. Return to Bezzu Security home page.';
include 'includes/header.php';
?>

<section class="alt-section" style="min-height: 70vh; display: flex; align-items: center;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="mb-4">
                    <i class="fas fa-shield-alt text-secondary opacity-25" style="font-size: 5rem;"></i>
                </div>
                <h1 class="display-1 fw-bold mb-3" style="color: var(--secondary);">404</h1>
                <h2 class="h3 mb-3">Page Not Found</h2>
                <p class="lead text-secondary mb-4">The page you are looking for might have been moved or no longer exists.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="index.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-home me-2"></i>Back to Home
                    </a>
                    <a href="contact.php" class="btn btn-outline-brand btn-lg">
                        <i class="fas fa-envelope me-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
