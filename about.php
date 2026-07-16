<?php
$page_title = 'About Us';
$page_description = 'Learn about Bezzu Security - Tanzania\'s trusted security company. Our mission, vision, leadership team, and commitment to professional security services.';
include 'includes/header.php';
?>

<section class="hero" style="min-height: 50vh;">
    <div class="hero-bg" style="background-image: url('images/Blue-Solder.jpg');"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">About Us</div>
            <h1 class="hero-title">About <span>Bezzu Security</span></h1>
            <p class="hero-desc">Your Trusted Partner in Professional Security Services</p>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="images/Feminguard.png" alt="Professional Security Personnel" class="w-100 rounded-4 shadow">
            </div>
            <div class="col-lg-6">
                <span class="section-subtitle">Our Story</span>
                <h2 class="section-title">Leading Security Excellence</h2>
                <p class="mb-3">Bezzu Security Co. Ltd is a leading private security firm registered in Tanzania, dedicated to providing professional security services. We combine innovation with expertise to deliver reliable security solutions that meet the diverse needs of our clients.</p>
                <div class="row g-3 mt-4">
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3" style="background: var(--accent-subtle); border-left: 3px solid var(--accent);">
                            <h4 class="h6 fw-bold mb-1">Our Mission</h4>
                            <p class="small text-secondary mb-0">To provide professional security services that ensure the safety and peace of mind of our clients.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3" style="background: var(--accent-subtle); border-left: 3px solid var(--accent);">
                            <h4 class="h6 fw-bold mb-1">Our Vision</h4>
                            <p class="small text-secondary mb-0">To be the most trusted and reliable security service provider in Tanzania and East Africa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" style="background: var(--bg);">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-subtitle">Our Leadership</span>
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-desc">The skilled professionals behind Bezzu Security's success</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="images/Benard Mathew Mwakyembe.jpeg" alt="Benard Mathew Mwakyembe">
                    </div>
                    <div class="team-card-body">
                        <h3>Benard Mathew Mwakyembe</h3>
                        <p class="position">Managing Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="images/BRIANKIKOTI.jpeg" alt="Brian Kikoti">
                    </div>
                    <div class="team-card-body">
                        <h3>Brian Kikoti</h3>
                        <p class="position">Operations Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-card">
                    <div class="team-card-img">
                        <img src="images/jackson kiyeyeu.jpeg" alt="Jackson Kiyeyeu">
                    </div>
                    <div class="team-card-body">
                        <h3>Jackson Kiyeyeu</h3>
                        <p class="position">Head of Operations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <div class="text-center">
                    <i class="fas fa-file-pdf mb-3" style="font-size: 5rem; color: var(--secondary); opacity: 0.3;"></i>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <span class="section-subtitle">Download Our Brochure</span>
                <h2 class="section-title">Get the Full Picture</h2>
                <p class="mb-4">Download our company brochure to learn more about our mission, team, and the full range of security services we offer.</p>
                <a href="docs/New Bezzu Bronchure.pdf" download class="btn btn-accent btn-lg">
                    <i class="fas fa-file-pdf me-2"></i>Download Brochure
                </a>
            </div>
        </div>
    </div>
</section>

<section class="cta-section section-padding" style="background-image: url('images/Blue-Solder.jpg');">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold text-white mb-3">Ready to Get Started?</h2>
                <p class="lead text-white opacity-75 mb-4">Contact us today to discuss your security needs</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="contact.php" class="btn btn-accent btn-lg">Contact Us</a>
                    <a href="tel:+255784856377" class="btn btn-outline btn-lg">+255 784 856 377</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
