@extends('layouts.app')

@section('title', 'About Us | Smiley Dry Cleaning Manjeri, Malappuram')
@section('meta_description', 'Learn about Smiley Dry Cleaning in Manjeri, Malappuram. We offer premium laundry, shoe cleaning, and steam ironing services with a commitment to quality and speed.')
@section('meta_keywords', 'About Smiley Dry Cleaning, Laundry Manjeri, Malappuram, Dry Cleaners Story, Best Laundry Manjeri, Malappuram')

@section('content')
    <div class="about-page">
        <!-- Hero Section -->
        <section class="about-hero">
            <div class="container">
                <h1 class="hero-title reveal-text">More Than Just Laundry,<br>We Deliver <span
                        class="highlight">Smiles.</span></h1>
                <p class="hero-subtitle reveal-text-delay" style="text-align: center;">Based in Manjeri, Malappuram, serving with heart.
                </p>
            </div>
        </section>

        <!-- Story Section -->
        <section class="story-section">
            <div class="container">
                <div class="story-grid">
                    <div class="story-content">
                        <h2>Our Story</h2>
                        <p>Welcome to <strong>Smiley Dry Cleaning</strong>, Manjeri, Malappuram's most modern and customer-focused
                            laundry service. We started with a simple mission: to take the hassle out of laundry so you can
                            focus on what matters most.</p>
                        <p>We understand that your clothes are an investment. That's why we use state-of-the-art machinery,
                            premium eco-friendly detergents, and specialized care techniques for every garment—from your
                            daily wear to your most precious wedding sarees and premium sneakers.</p>
                        <p>At Smiley, we don't just clean; we care. Every pickup is an opportunity to brighten your day.</p>
                    </div>
                    <div class="story-image-wrapper">
                        <div class="story-card">
                            <div class="icon-large">:)</div>
                            <h3>Premium Care</h3>
                            <p>Specialized treatment for every fabric type.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="values-section">
            <div class="container">
                <div class="values-grid">
                    <div class="value-item">
                        <h3>Fast Service</h3>
                        <p>We value your time. Quick turnaround without compromising quality.</p>
                    </div>
                    <div class="value-item">
                        <h3>Expert Handling</h3>
                        <p>Trained professionals who know fabrics inside out.</p>
                    </div>
                    <div class="value-item">
                        <h3>Eco-Friendly</h3>
                        <p>Using safe, non-toxic cleaning agents that are gentle on clothes and the planet.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section" style="padding: 80px 0; background-color: var(--section-bg);">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="faq-list" style="max-width: 800px; margin: 0 auto; margin-top: 40px;">
                    <details class="faq-item">
                        <summary class="faq-question">
                            Why is Smiley the best dry cleaner in Manjeri?
                            <span class="toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            <p>We combine advanced technology with traditional care. We use premium eco-friendly detergents that are tough on stains but gentle on fabrics (and your skin). Plus, our 5-star customer service ensures a hassle-free experience every time.</p>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">
                            What are the hygiene precautions that Smiley takes?
                            <span class="toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            <p>Hygiene is our top priority. We follow a strict "No-Mix" policy—your clothes are never washed with another customer's. We also sanitize our machines daily and use antibacterial treatments during the final rinse.</p>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">
                            How do I book a service?
                            <span class="toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            <p>It's simple! You don't need to drive to us. Just click the "Book Pickup" button or WhatsApp us. Schedule a pickup time, and our rider will collect your laundry from your doorstep.</p>
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">
                            Does Smiley provide curtain and carpet cleaning?
                            <span class="toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            <p>Yes! We offer specialized deep cleaning for heavy items like curtains, carpets, blankets, and quilts. We can even unmount and remount curtains for your convenience.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <!-- Location / CTA -->
        <section class="location-section">
            <div class="container text-center">
                <h2>Visit Us in Manjeri, Malappuram</h2>
                <p>Near Noor Masjid, Opp. SBI ATM, Chettiyangadi, Areekod Road</p>
                <div class="cta-actions mt-4">
                    <a href="https://wa.me/919847677300" class="btn-primary">Chat with Us</a>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* Inline styles for specific about page needs, though moving to app.css is better later */
        .about-page {
            padding-top: 100px;
        }

        .about-hero {
            padding: 80px 0;
            text-align: center;
            background-color: var(--body-bg);
        }

        .about-hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 24px;
            color: var(--dark);
        }

        .about-hero .hero-subtitle {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .story-section {
            padding: 80px 0;
        }

        .story-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .story-content h2 {
            font-size: 2.5rem;
            margin-bottom: 24px;
        }

        .story-content p {
            font-size: 1.1rem;
            color: var(--text-sub);
            margin-bottom: 16px;
            line-height: 1.6;
        }

        .story-image-wrapper {
            display: flex;
            justify-content: center;
        }

        .story-card {
            background: var(--primary);
            padding: 40px;
            border-radius: 24px;
            text-align: center;
            transform: rotate(3deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .story-card .icon-large {
            font-size: 80px;
            font-weight: 800;
            margin-bottom: 16px;
            color: #000000;
        }

        .values-section {
            background: #111;
            color: #fff;
            padding: 80px 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .value-item h3 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .location-section {
            padding: 80px 0;
        }

        @media (max-width: 768px) {
            .about-hero h1 {
                font-size: 2.5rem;
            }

            .story-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection