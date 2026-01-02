@extends('layouts.app')

@section('title', 'Smiley Dry Cleaning Manjeri, Malappuram | Best Dry Cleaning & Shoe Cleaning Service')
@section('meta_description', 'Smiley Dry Cleaning in Manjeri, Malappuram offers premium dry cleaning, shoe cleaning, steam ironing, and laundry services. Fast pickup & delivery. Call +91 9847 677 300')
@section('meta_keywords', 'Dry Cleaning Manjeri, Malappuram, Shoe Cleaning Manjeri, Malappuram, Laundry Service Manjeri, Malappuram, Steam Ironing Manjeri, Malappuram, Best Dry Cleaners Manjeri, Malappuram, Smiley Dry Cleaning')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg-pattern"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <span class="badge-pill">✨ Premium Dry Clean Service in Manjeri, Malappuram</span>
                <h1 class="hero-title">
                    Wear it <br>
                    <span class="text-outline">Fresh.</span>
                    <span class="text-highlight">Smile.</span>
                </h1>
                <p class="hero-subtitle">Experience the next generation of garment care. We don't just clean; we revitalize
                    your favorite clothes.</p>

                <div class="hero-actions">
                    <a href="#services" class="btn-primary large">
                        Explore Services
                        <span class="arrow-icon">→</span>
                    </a>
                    <div class="rating-badge">
                        <span class="stars">★★★★★</span>
                        <span class="text">Trusted by 500+ People</span>
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

    <!-- Shoe Cleaning Focus Section -->
    <section class="shoe-section">
        <div class="container shoe-container">
            <div class="shoe-text">
                <span class="badge-pill">Shoe Laundry Experts</span>
                <h2>Give Your Kicks a <br><span class="highlight">Second Life.</span></h2>
                <p>From favorite sneakers to premium leather shoes, we deep clean, restore, and protect your footwear. Walk
                    with confidence again.</p>
                <ul class="shoe-features">
                    <li>✓ Deep Stain Removal</li>
                    <li>✓ Odor Elimination</li>
                    <li>✓ Sole Whitening</li>
                </ul>
                <a href="https://wa.me/919847677300?text=Hi, I need shoe cleaning service." class="btn-black mt-4">Book Shoe
                    Spa</a>
            </div>
            <div class="shoe-visual">
                <div class="floating-shoe-wrapper">
                    <div class="shoe-glow"></div>
                    <img src="{{ asset('assets/shoes.svg') }}" alt="Shoe Cleaning Service" class="floating-shoe">
                </div>
            </div>
        </div>
    </section>

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
                    <p>Schedule a pickup from your home or drop off at our Manjeri, Malappuram store.</p>
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
                @foreach($services as $service)
                    <div class="bento-card service-anim">
                        <div class="card-content">
                            <div class="service-icon-wrapper">
                                <!-- SVGs based on icon name -->
                                @if($service->icon == 'iron')
                                    <!-- Steam Iron -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M19 9.3V14c0 2.2-1.8 4-4 4H5.6c-2.4 0-4.3-2.1-3.9-4.5.3-1.6 1.7-2.9 3.3-2.9 1 0 2 .5 2.6 1.3l.8 1.1h5.2" />
                                        <path d="M6 9.4 8.7 5c.4-.7 1.1-1 1.9-1h6.9c1.4 0 2.5 1.1 2.5 2.5v2.8" />
                                    </svg>
                                @elseif($service->icon == 'shoe')
                                    <!-- Shoe -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 11V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6" />
                                        <path
                                            d="M2.5 11h16.2c1.7 0 2.8 1.9 1.9 3.4l-2.4 3.9A2 2 0 0 1 16.5 20h-11A2 2 0 0 1 3.5 18v-5.2c0-1.1.9-1.8 2-1.8Z" />
                                        <circle cx="8" cy="15" r="1.5" />
                                    </svg>
                                @elseif($service->icon == 'curtain')
                                    <!-- Curtain -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 3h18v18H3z" />
                                        <path d="M7 3v18" />
                                        <path d="M17 3v18" />
                                        <path d="M3 9c2 0 4-4 4-6" />
                                        <path d="M17 3c0 2 2 6 4 6" />
                                    </svg>
                                @elseif($service->icon == 'carpet')
                                    <!-- Carpet/Rug -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="3" width="20" height="18" rx="2" />
                                        <path d="M2 9h20" />
                                        <path d="M2 15h20" />
                                        <path d="M8 3v18" />
                                        <path d="M16 3v18" />
                                    </svg>
                                @elseif($service->icon == 'blanket')
                                    <!-- Blanket (Layered) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 14h20" />
                                        <path d="M5 14v-4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4" />
                                        <path d="M2 14c0 3.3 3.6 6 8 6h4c4.4 0 8-2.7 8-6" />
                                    </svg>
                                @elseif($service->icon == 'bag')
                                    <!-- Bag -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                        <line x1="3" y1="6" x2="21" y2="6" />
                                        <path d="M16 10a4 4 0 0 1-8 0" />
                                    </svg>
                                @elseif($service->icon == 'suit')
                                    <!-- Suit (Shirt/Hanger) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M20.38 3.46L16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z" />
                                    </svg>
                                @elseif($service->icon == 'saree')
                                    <!-- Saree/Dress -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 4V2l-2-2-2 2v2" />
                                        <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2" />
                                        <path d="M12 4v7l2 2" />
                                    </svg>
                                @elseif($service->icon == 'stain')
                                    <!-- Stain -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 2c-3 4-8 6-8 11 0 4.4 3.6 8 8 8s8-3.6 8-8c0-5-5-7-8-11z" />
                                        <circle cx="10" cy="14" r="1" />
                                        <circle cx="14" cy="12" r="1" />
                                    </svg>
                                @else
                                    <!-- Generic Sparkle -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m12 2 3.1 8.3L22 9.3l-5 4.9 1.2 6.8-6.2-3.3-6.2 3.3 1.2-6.8-5-4.9 6.9 1Z" />
                                    </svg>
                                @endif
                            </div>
                            <h3>
                                <a href="{{ route('service.show', $service->slug ?? 'home') }}" style="text-decoration:none; color:inherit;">
                                    {{ $service->title }}
                                </a>
                            </h3>
                            <p>{{ $service->description }}</p>
                            <a href="{{ route('service.show', $service->slug ?? 'home') }}" class="read-more-link">
                                Read More <span style="font-size: 1.2em; vertical-align: middle;">›</span>
                            </a>
                        </div>
                        <div class="card-footer">
                            <a href="https://wa.me/919847677300?text={{ urlencode('Hi, I am interested in ' . $service->title . ' service.') }}"
                                target="_blank" class="btn-wa-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                    </path>
                                </svg>
                                Book via WhatsApp
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section-home" style="padding: 100px 0; background-color: var(--body-bg);">
        <div class="container">
            <div class="section-header text-center">
                <h2>Frequently Asked Questions</h2>
                <p>Common questions about our dry cleaning service.</p>
            </div>
            
            <div class="faq-list" style="max-width: 800px; margin: 0 auto;">
                <details class="faq-item">
                    <summary class="faq-question">
                        How good is Smiley's shoe dry cleaning and shoe laundry service?
                        <span class="toggle-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>We provide world-class care for all types of footwear including sports shoes, sneakers, leather shoes, suede, and nubuck. Our 5-step process involves deep cleaning, advanced stain removal, odor elimination, sole whitening, and anti-bacterial treatment to make your shoes look brand new.</p>
                    </div>
                </details>
                
                <details class="faq-item">
                    <summary class="faq-question">
                        Does Smiley provide free home pickup and delivery?
                        <span class="toggle-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Yes, we offer complimentary doorstep pickup and delivery services in Manjeri and surrounding areas. Simply book via WhatsApp or call us, and our rider will collect your garments at your convenience.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        What is the difference between laundry and dry cleaning?
                        <span class="toggle-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Laundry uses water and detergents to clean common garments. Dry Cleaning uses specialized chemical solvents instead of water to clean delicate fabrics like silk, wool, and embellished outfits, preserving their texture and color without shrinkage.</p>
                    </div>
                </details>
                
                <details class="faq-item">
                    <summary class="faq-question">
                        Does Smiley have any option of express delivery?
                        <span class="toggle-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Absolutely! We understand urgent needs. We offer an Express Service with 24-hour turnaround for laundry and dry cleaning. Please mention this requirement when booking.</p>
                    </div>
                </details>
                
                <details class="faq-item">
                    <summary class="faq-question">
                        Does Smiley remove stains in dry cleaning service?
                        <span class="toggle-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Yes, we use premium, fabric-safe spotting agents to treat tough stains like oil, ink, curry, and wine. While we successfully remove 99% of stains, the outcome depends on the nature and age of the stain.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        Does Smiley provide leather dry cleaning and coloring service?
                        <span class="toggle-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Yes, we are experts in leather care. We provide cleaning, conditioning, polishing, and color restoration services for leather jackets, bags, wallets, and shoes to bring back their original shine and softness.</p>
                    </div>
                </details>
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
                    <a href="https://wa.me/919847677300?text=Hi, I would like to schedule a pickup." target="_blank"
                        class="btn-whatsapp-large">
                        WhatsApp Enquiry
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