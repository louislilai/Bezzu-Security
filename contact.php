<?php
$page_title = 'Contact Us';
$page_description = 'Get in touch with Bezzu Security. Contact our security experts for professional security solutions in Tanzania.';
include 'includes/header.php';
?>

<section class="hero" style="min-height: 50vh;">
    <div class="hero-bg" style="background-image: url('images/Blue-Solder.jpg');"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">Get in Touch</div>
            <h1 class="hero-title">Contact <span>Us</span></h1>
            <p class="hero-desc">Connect with our security experts for professional solutions</p>
            <div class="hero-actions">
                <a href="#contact-form" class="btn btn-accent btn-lg">Send Message</a>
                <a href="tel:+255784700900" class="btn btn-outline btn-lg">Call Us Now</a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-white" id="contact-form">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <span class="section-subtitle">Contact Information</span>
                <h2 class="section-title">Get in Touch</h2>
                <p class="mb-4">Reach out to us for any inquiries or to discuss your security needs. Our team is ready to assist you.</p>

                <div class="contact-card-item mb-3">
                    <div class="contact-card-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4>Address</h4>
                        <p>Salimini Amour Road, Plot No. 01, Makumbusho near BAKITA</p>
                    </div>
                </div>
                <div class="contact-card-item mb-3">
                    <div class="contact-card-icon"><i class="fas fa-phone"></i></div>
                    <div>
                        <h4>Phone</h4>
                        <p>+255 653 702 335<br>+255 753 888 898</p>
                    </div>
                </div>
                <div class="contact-card-item mb-3">
                    <div class="contact-card-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4>Email</h4>
                        <p>info@bezzusecurity.co.tz</p>
                    </div>
                </div>

                <div class="mt-4 p-4 rounded-4" style="background: var(--accent-subtle);">
                    <h4 class="h5 fw-bold mb-2">Download Our Brochure</h4>
                    <p class="small mb-3">Get complete details about our services and company.</p>
                    <a href="docs/New Bezzu Bronchure.pdf" download class="btn btn-accent">
                        <i class="fas fa-file-pdf me-2"></i>Download Brochure
                    </a>
                </div>
            </div>

            <div class="col-lg-7">
                <?php if(isset($_SESSION['contact_status'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['contact_status'] === 'success' ? 'success' : 'danger'; ?> mb-4" role="alert">
                        <?php
                            echo htmlspecialchars($_SESSION['contact_message'], ENT_QUOTES, 'UTF-8');
                            unset($_SESSION['contact_status']);
                            unset($_SESSION['contact_message']);
                        ?>
                    </div>
                <?php endif; ?>

                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <h3 class="h4 mb-4">Send Us a Message</h3>
                    <form id="contactForm" action="process_contact.php" method="POST">
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required autocomplete="name">
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required autocomplete="email">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required autocomplete="tel" inputmode="tel">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Service Interest (Optional)</label>
                            <select class="form-select" id="service" name="service">
                                <option value="">Select a service</option>
                                <option value="Corporate Security">Corporate Security</option>
                                <option value="Residential Security">Residential Security</option>
                                <option value="Executive Protection">Executive Protection</option>
                                <option value="Event Security">Event Security</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid px-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4818.286591520124!2d39.24687487580273!3d-6.77818119321878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d9f4395a72f%3A0x9f215b30cf3f1b70!2sBEZZU%20SECURITY!5e1!3m2!1sen!2stz!4v1747911770943!5m2!1sen!2stz"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            this.classList.add('was-validated');
        });
    }
    <?php if(isset($_SESSION['contact_status'])): ?>
    var formEl = document.getElementById('contactForm');
    if (formEl) { formEl.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    <?php endif; ?>
});
</script>
