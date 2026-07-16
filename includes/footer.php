    </main>
<footer class="footer">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="footer-brand">
                    <img src="images/bezzu.png" alt="Bezzu Security" width="48" height="48" class="mb-3">
                    <p>Professional security services you can trust. Protecting what matters most with excellence and integrity across Tanzania.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 offset-lg-1">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="blog.php">Blog</a></li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h3 class="footer-title">Contact</h3>
                <ul class="footer-links footer-contact">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Plot No. 755 Block D, Maliki Road, Mikocheni, Dar es Salaam</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+255784856377">+255 784 856 377</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@bezzusecurity.co.tz">info@bezzusecurity.co.tz</a>
                    </li>
                </ul>

                <h3 class="footer-title mt-4">Newsletter</h3>
                <?php if(isset($_SESSION['newsletter_status'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['newsletter_status'] === 'success' ? 'success' : 'danger'; ?> mb-3 py-2" role="alert" style="font-size:0.8rem;">
                        <?php
                        echo htmlspecialchars($_SESSION['newsletter_message'], ENT_QUOTES, 'UTF-8');
                        unset($_SESSION['newsletter_status']);
                        unset($_SESSION['newsletter_message']);
                        ?>
                    </div>
                <?php endif; ?>
                <form class="footer-newsletter" action="process_newsletter.php" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="email" name="email" class="form-control" placeholder="Your email address" required autocomplete="email">
                    <button type="submit" class="btn btn-accent btn-block">
                        <i class="fas fa-paper-plane"></i> Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Bezzu Security Co. Ltd. All rights reserved.</p>
        </div>
    </div>
</footer>

<button id="back-to-top" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>

<script>
    window.addEventListener('load', function() {
        var loader = document.querySelector('.page-loader');
        if (loader) {
            loader.style.opacity = '0';
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500);
        }
    });
</script>
</body>
</html>
