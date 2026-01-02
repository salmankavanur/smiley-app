<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Smiley Dry Cleaning - Premium Laundry Services in Manjeri. We pick up, clean, and deliver.">
    <title>@yield('title', 'Smiley Dry Cleaning | Premium Live Laundry')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- GSAP for Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="smooth-scroll">
    <!-- Custom Cursor -->
    <div class="cursor-dot" id="cursor-dot"></div>
    <div class="cursor-circle" id="cursor-circle"></div>

    <header class="site-header">
        <div class="container header-container">
            <a href="{{ route('home') }}" class="brand-logo">
                <div class="logo-circle">
                    <span class="smiley-face">:)</span>
                </div>
                <div class="logo-text">
                    Smiley<span class="highlight">Dry</span>
                </div>
            </a>

            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <span></span><span></span><span></span>
            </button>

            <nav class="main-nav">
                <ul>
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="#process" class="nav-link">Process</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li>
                        <a href="tel:+919847677300" class="btn-primary glow-effect">
                            <span class="btn-content">Book Pickup
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.05 12.05 0 0 0 .57 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.05 12.05 0 0 0 2.81.57A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <div class="footer-left">
                <a href="#" class="brand-logo footer-logo">
                    <span class="logo-text text-white">Smiley<span class="highlight">Dry</span></span>
                </a>
                <p class="footer-desc">Redefining laundry with speed, care, and a smile. Premium dry cleaning service in
                    Manjeri.</p>
                <div class="social-links">
                    <a href="#" class="social-icon">IG</a>
                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">WA</a>
                </div>
            </div>
            <div class="footer-contact">
                <h4>Visit Us</h4>
                <address>
                    Near Noor Masjid,<br>
                    Opp. SBI ATM, Chettiyangadi,<br>
                    Areekod Road, MANJERI
                </address>
                <div class="contact-highlight">
                    Open: 9:00 AM - 9:00 PM
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Smiley Dry Cleaning. All rights reserved.</p>
            <p class="dev-credit">Designed with <span style="color: var(--primary-color)">♥</span></p>
        </div>
    </footer>

    <script type="module">
        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Custom Cursor Logic
        const cursorDot = document.getElementById('cursor-dot');
        const cursorCircle = document.getElementById('cursor-circle');

        document.addEventListener('mousemove', (e) => {
            gsap.to(cursorDot, { x: e.clientX, y: e.clientY, duration: 0.1 });
            gsap.to(cursorCircle, { x: e.clientX, y: e.clientY, duration: 0.3 });
        });

        // Hover effects for links
        const hoverables = document.querySelectorAll('a, button');
        hoverables.forEach(el => {
            el.addEventListener('mouseenter', () => {
                gsap.to(cursorCircle, { scale: 1.5, borderColor: 'transparent', backgroundColor: 'rgba(255, 214, 0, 0.2)', duration: 0.3 });
            });
            el.addEventListener('mouseleave', () => {
                gsap.to(cursorCircle, { scale: 1, borderColor: '#1a1a1a', backgroundColor: 'transparent', duration: 0.3 });
            });
        });

        // Mobile Menu Toggle
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const nav = document.querySelector('.main-nav');

        if (menuToggle && nav) {
            menuToggle.addEventListener('click', () => {
                const isActive = nav.classList.contains('active');

                if (!isActive) {
                    nav.classList.add('active');
                    gsap.fromTo(nav,
                        { opacity: 0, y: -20 },
                        { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" }
                    );

                    // Animate links staggering in
                    gsap.fromTo(".nav-link", 
                        { y: 20, opacity: 0 },
                        { y: 0, opacity: 1, stagger: 0.1, duration: 0.4, delay: 0.2 }
                    );
                } else {
                    gsap.to(nav, { 
                        opacity: 0, 
                        y: -20, 
                        duration: 0.3, 
                        onComplete: () => nav.classList.remove('active') 
                    });
                }
            });
            
            // Close menu on link click
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    if (nav.classList.contains('active')) {
                        gsap.to(nav, { 
                            opacity: 0, 
                            y: -20, 
                            duration: 0.3, 
                            onComplete: () => nav.classList.remove('active') 
                        });
                    }
                });
            });
        }

        // Service Cards Reveal - Fixed (Moved Outside)
        gsap.utils.toArray('.service-anim').forEach((card, i) => {
            gsap.fromTo(card, 
                { 
                    y: 50, 
                    opacity: 0, 
                    scale: 0.95
                },
                {
                    scrollTrigger: {
                        trigger: ".services-section",
                        start: "top 85%", 
                        toggleActions: "play none none reverse"
                    },
                    y: 0, 
                    opacity: 1, 
                    scale: 1, 
                    duration: 0.8,
                    delay: i * 0.1,
                    ease: "power3.out",
                    overwrite: "auto"
                }
            );
        });
    </script>
</body>

</html>