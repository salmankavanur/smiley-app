<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="@yield('meta_description', 'Smiley Dry Cleaning - Best Dry Cleaning & Shoe Laundry Service in Manjeri. Premium care for clothes, shoes, bags, and more.')">
    <meta name="keywords"
        content="@yield('meta_keywords', 'Dry Cleaning Manjeri, Shoe Cleaning Manjeri, Laundry Service Manjeri, Smiley Dry Cleaning, Premium Laundry')">
    <title>@yield('title', 'Smiley Dry Cleaning | Premium Live Laundry in Manjeri')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Poppins:wght@700;800;900&display=swap"
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
                <div class="logo-icon">
                    <!-- Custom SVG Smiley -->
                    <svg width="100%" height="100%" viewBox="0 0 100 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50" fill="#FFD600" />
                        <circle cx="35" cy="40" r="6" fill="#1a1a1a" />
                        <circle cx="65" cy="40" r="6" fill="#1a1a1a" />
                        <path d="M30 65C30 65 40 75 50 75C60 75 70 65 70 65" stroke="#1a1a1a" stroke-width="6"
                            stroke-linecap="round" />
                    </svg>
                </div>
                <div class="logo-text-group">
                    <span class="brand-name">Smiley</span>
                    <span class="brand-tagline">Dry Cleaning Service</span>
                </div>
            </a>

            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <span></span><span></span><span></span>
            </button>

            <nav class="main-nav">
                <ul>
                    <li><a href="{{ route('home') }}#services" class="nav-link">Services</a></li>
                    <li><a href="{{ route('home') }}#process" class="nav-link">Process</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
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
                    <div class="logo-icon">
                        <!-- Custom SVG Smiley (White for Footer) -->
                        <svg width="100%" height="100%" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50" fill="#FFD600" />
                            <circle cx="35" cy="40" r="6" fill="#1a1a1a" />
                            <circle cx="65" cy="40" r="6" fill="#1a1a1a" />
                            <path d="M30 65C30 65 40 75 50 75C60 75 70 65 70 65" stroke="#1a1a1a" stroke-width="6"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="logo-text-group">
                        <span class="brand-name text-white">Smiley</span>
                        <span class="brand-tagline text-gray">Dry Cleaning Service</span>
                    </div>
                </a>
                <p class="footer-desc">Redefining laundry with speed, care, and a smile. Premium dry cleaning service in
                    Manjeri.</p>
                <div class="social-links">
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://wa.me/919847677300" class="social-icon" aria-label="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                    </a>
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
            <div class="container footer-bottom-inner">
                <p>&copy; {{ date('Y') }} Smiley Dry Cleaning. All rights reserved.</p>
                <p class="dev-credit">Designed with <span style="color: var(--primary)">♥</span></p>
            </div>
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