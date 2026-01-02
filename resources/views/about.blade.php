@extends('layouts.app')

@section('title', 'About Us | Smiley Dry Cleaning Manjeri')
@section('meta_description', 'Learn about Smiley Dry Cleaning in Manjeri. We offer premium laundry, shoe cleaning, and steam ironing services with a commitment to quality and speed.')
@section('meta_keywords', 'About Smiley Dry Cleaning, Laundry Manjeri, Dry Cleaners Story, Best Laundry Manjeri')

@section('content')
    <div class="about-page">
        <!-- Hero Section -->
        <section class="about-hero">
            <div class="container">
                <h1 class="hero-title reveal-text">More Than Just Laundry,<br>We Deliver <span
                        class="highlight">Smiles.</span></h1>
                <p class="hero-subtitle reveal-text-delay" style="text-align: center;">Based in Manjeri, serving with heart.
                </p>
            </div>
        </section>

        <!-- Story Section -->
        <section class="story-section">
            <div class="container">
                <div class="story-grid">
                    <div class="story-content">
                        <h2>Our Story</h2>
                        <p>Welcome to <strong>Smiley Dry Cleaning</strong>, Manjeri's most modern and customer-focused
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

        <!-- Location / CTA -->
        <section class="location-section">
            <div class="container text-center">
                <h2>Visit Us in Manjeri</h2>
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
            background-color: var(--bg-light);
        }

        .about-hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 24px;
            color: var(--dark);
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
            color: #555;
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
            color: var(--dark);
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