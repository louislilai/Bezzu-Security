document.addEventListener('DOMContentLoaded', function() {
    initHeader();
    initNav();
    initBackToTop();
});

function initHeader() {
    var header = document.querySelector('.main-header');
    if (!header) return;

    var ticking = false;
    function updateHeader() {
        header.classList.toggle('scrolled', window.scrollY > 60);
        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });

    updateHeader();
}

function initNav() {
    var toggle = document.getElementById('navToggle');
    var menu = document.getElementById('mobileMenu');
    if (!toggle || !menu) return;

    var isOpen = false;

    function closeMenu() {
        isOpen = false;
        toggle.classList.remove('active');
        menu.classList.remove('open');
        document.body.style.overflow = '';
    }

    function openMenu() {
        isOpen = true;
        toggle.classList.add('active');
        menu.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    toggle.addEventListener('click', function() {
        if (isOpen) { closeMenu(); } else { openMenu(); }
    });

    menu.querySelectorAll('.mobile-menu-link').forEach(function(link) {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isOpen) closeMenu();
    });
}

function initBackToTop() {
    var btn = document.getElementById('back-to-top');
    if (!btn) return;

    window.addEventListener('scroll', function() {
        btn.classList.toggle('active', window.scrollY > 300);
    });

    btn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}
