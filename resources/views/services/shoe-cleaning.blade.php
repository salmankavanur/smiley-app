@extends('layouts.app')

@section('title', 'Premium Shoe Laundry & Cleaning in Manjeri, Malappuram | Sneaker Spa')
@section('meta_description', 'Professional shoe cleaning service in Manjeri, Malappuram. We clean sneakers, leather shoes, boots, and suede. Restore your footwear to brand new condition today.')
@section('meta_keywords', 'shoe cleaning Manjeri, Malappuram, sneaker laundry Manjeri, Malappuram, shoe washing service, shoe spa Manjeri, Malappuram, best shoe cleaners')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Shoe
                    Cleaning</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Shoe Cleaning</h1>
                        <p class="service-intro">Premium care for your sneakers, leather shoes, and more.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Give your kicks a second life with the <strong>best shoe laundry in Manjeri, Malappuram</strong>.
                            From white
                            sneakers turning yellow to muddy trekking boots, we handle it all. Our shoe cleaning experts use
                            specialized chemicals and soft brushes to deep clean without damaging the material.</p>
                        <h3>We Clean:</h3>
                        <ul>
                            <li>Sneakers & Sports Shoes</li>
                            <li>Formal Leather Shoes</li>
                            <li>Suede & Nubuck Footwear</li>
                            <li>Boots & Loafers</li>
                        </ul>
                        <p>We also offer sole whitening and odor elimination treatments.</p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Deep Stain Removal</li>
                                <li><span class="check-icon">✓</span> Odor Elimination</li>
                                <li><span class="check-icon">✓</span> Sole Whitening</li>
                                <li><span class="check-icon">✓</span> Suede Protection</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">👟</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Can you clean white sneakers that have turned yellow?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Yes, we use specialized de-yellowing agents and UV treatment to restore the
                                        brightness of white soles and fabrics.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Do you clean leather shoes?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Absolutely. We use premium leather cleaners and conditioners to clean and nourish the
                                        leather, preventing cracks.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    How long does shoe cleaning take?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Shoe cleaning typically takes 3-4 days to ensure proper drying and detailing.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Shoe Cleaning</h3>
                        <p>Fast pickup & delivery in Manjeri, Malappuram.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Shoe%20Cleaning%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection