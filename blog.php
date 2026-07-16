<?php
$page_title = 'Blog';
$page_description = 'Stay updated with Bezzu Security\'s industry insights, security tips, training programs, and technology trends.';
include 'includes/header.php';
?>

<section class="hero" style="min-height: 50vh;">
    <div class="hero-bg" style="background-image: url('images/Blue-Solder.jpg');"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">Our Latest News</div>
            <h1 class="hero-title">Security <span>Insights</span></h1>
            <p class="hero-desc">Stay Updated with Industry News and Expert Analysis</p>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="blog-grid">
            <div class="blog-card">
                <div class="blog-card-img">
                    <img src="images/event-security.jpeg" alt="Security Tips">
                </div>
                <div class="blog-card-body">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar-alt"></i>May 10, 2025</span>
                        <span class="ms-3"><i class="far fa-user"></i>Admin</span>
                    </div>
                    <h3>Essential Security Tips for Business Owners</h3>
                    <p>Learn about the latest security measures that every business owner should implement to protect their assets...</p>
                    <a href="#" class="btn btn-outline-brand btn-sm">Read More</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-card-img">
                    <img src="images/training.jpg" alt="Security Training">
                </div>
                <div class="blog-card-body">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar-alt"></i>May 8, 2025</span>
                        <span class="ms-3"><i class="far fa-user"></i>Admin</span>
                    </div>
                    <h3>Professional Security Training Programs</h3>
                    <p>Discover our comprehensive security training programs designed to prepare security professionals...</p>
                    <a href="#" class="btn btn-outline-brand btn-sm">Read More</a>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-card-img">
                    <img src="images/camera.jpg" alt="Security Technology">
                </div>
                <div class="blog-card-body">
                    <div class="blog-meta">
                        <span><i class="far fa-calendar-alt"></i>May 5, 2025</span>
                        <span class="ms-3"><i class="far fa-user"></i>Admin</span>
                    </div>
                    <h3>Modern Security Technology Trends</h3>
                    <p>Explore the latest technological advancements in the security industry and how they benefit our clients...</p>
                    <a href="#" class="btn btn-outline-brand btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Blog navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
