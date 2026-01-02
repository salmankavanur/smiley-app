@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg-pattern"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <span class="badge-pill">✨ Premium Care in Manjeri</span>
                <h1 class="hero-title">
                    Wear it <br>
                    <span class="text-outline">Fresh.</span>
                    <span class="text-highlight">Smile.</span>
                </h1>
                <p class="hero-subtitle">Experience the next generation of garment care. We don't just clean; we revitalize your favorite clothes.</p>
                
                <div class="hero-actions">
                    <a href="#services" class="btn-primary large">
                        Explore Services
                        <span class="arrow-icon">→</span>
                    </a>
                    <div class="rating-badge">
                        <span class="stars">★★★★★</span>
                        <span class="text">Trusted by 1000+ Locals</span>
                    </div>
                </div>
            </div>
            
            <div class="hero-visual-area">
                <div class="smiley-3d-wrapper">
                    <div class="smiley-face-3d">
                        <div class="eye left"></div>
                        <div class="eye right"></div>
                        <div class="mouth"></div>
                    </div>
                    <div class="floating-item item-1">👕</div>
                    <div class="floating-item item-2">👗</div>
                    <div class="floating-item item-3">🧼</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Text -->
    <div class="marquee-container">
        <div class="marquee-content">
            <span>DRY CLEANING • STEAM IRONING • SHOE LAUNDRY • STAIN REMOVAL • CARPET CLEANING • </span>
            <span>DRY CLEANING • STEAM IRONING • SHOE LAUNDRY • STAIN REMOVAL • CARPET CLEANING • </span>
        </div>
    </div>

    <!-- Process Section -->
    <section id="process" class="process-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Simple as 1, 2, 3</h2>
                <p>We've streamlined the laundry process for you.</p>
            </div>
            
            <div class="process-steps">
                <div class="step-card" data-step="1">
                    <div class="step-number">01</div>
                    <div class="step-icon">📦</div>
                    <h3>We Pickup</h3>
                    <p>Schedule a pickup from your home or drop off at our Manjeri store.</p>
                </div>
                <div class="step-line"></div>
                <div class="step-card" data-step="2">
                    <div class="step-number">02</div>
                    <div class="step-icon">✨</div>
                    <h3>We Magic</h3>
                    <p>Our experts treat stains, wash, and steam iron your garments.</p>
                </div>
                <div class="step-line"></div>
                <div class="step-card" data-step="3">
                    <div class="step-number">03</div>
                    <div class="step-icon">🚚</div>
                    <h3>We Deliver</h3>
                    <p>Fresh, crisp clothes delivered back to you within 48 hours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header">
                <h2 class="title-large">Our Expertise</h2>
                <a href="tel:+919847677300" class="link-arrow">Need a custom quote?</a>
            </div>
            
            <div class="bento-grid">
                @foreach($services as $index => $service)
                    @php
                        // Assign grid classes based on index to create a "Bento" look
                        $gridClass = '';
                        if ($index === 0) $gridClass = 'span-2-row span-2-col'; // Feature item
                        elseif ($index === 3) $gridClass = 'span-2-col'; 
                    @endphp
                    
                    <div class="bento-card {{ $gridClass }} service-anim">
                        <div class="card-content">
                            <div class="service-icon-wrapper">
                                <!-- SVGs based on icon name -->
                                @if($service->icon == 'iron')
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 21h10a2 2 0 0 0 2-2V9.586a1 1 0 0 0-.293-.707l-3.586-3.586A1 1 0 0 0 14.414 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z"></path><path d="M9 7h1"></path></svg>
                                @elseif($service->icon == 'shoe')
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path><path d="M12 12v9h4.4a2.6 2.6 0 1 0 .6-5h-5"></path></svg>
                                @elseif($service->icon == 'carpet' || $service->icon == 'curtain')
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="3"></rect><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line><circle cx="7" cy="7" r="1.5"></circle><circle cx="17" cy="7" r="1.5"></circle><circle cx="7" cy="17" r="1.5"></circle><circle cx="17" cy="17" r="1.5"></circle></svg>
                                @elseif($service->icon == 'blanket')
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                @elseif($service->icon == 'bag')
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                @elseif($service->icon == 'suit' || $service->icon == 'saree')
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.38 3.46L16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"></path></svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                @endif
                            </div>
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <div class="cta-content">
                    <h2>Ready to fresh start?</h2>
                    <p>Visit our store or call us for a quick pickup.</p>
                </div>
                <div class="cta-actions">
                    <a href="tel:+919847677300" class="btn-black">
                        Call +91 9847 677 300
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script type="module">
        // GSAP Animations
        
        // Hero Content Stagger
        gsap.from(".hero-content > *", {
            y: 50,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out",
            delay: 0.2
        });

        // 3D Smiley Float
        gsap.to(".smiley-face-3d", {
            y: -20,
            rotation: 5,
            duration: 2,
            yoyo: true,
            repeat: -1,
            ease: "sine.inOut"
        });
        
        gsap.to(".floating-item", {
            y: -30,
            duration: 2.5,
            yoyo: true,
            repeat: -1,
            ease: "sine.inOut",
            stagger: 0.5
        });

        // Process Steps Stagger
        gsap.from(".step-card", {
            scrollTrigger: {
                trigger: ".process-section",
                start: "top 80%",
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.3,
            ease: "back.out(1.7)"
        });

        // Service Cards Reveal
        gsap.from(".service-anim", {
            scrollTrigger: {
                trigger: ".services-section",
                start: "top 70%",
            },
            y: 30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: "power2.out"
        });
    </script>
@endsection