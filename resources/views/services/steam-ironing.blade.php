@extends('layouts.app')

@section('title', 'Best Steam Ironing Service in Manjeri | Wrinkle-Free Guarantee')
@section('meta_description', 'Get crisp, professional steam ironing in Manjeri. Protect your clothes from burns and shine. Fast pickup and delivery available. Call Smiley Dry Cleaning now.')
@section('meta_keywords', 'steam ironing manjeri, ironing service manjeri, clothes pressing manjeri, laundry service, dry cleaners near me')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Steam
                    Ironing</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Steam Ironing</h1>
                        <p class="service-intro">Crisp and wrinkle-free finishing for your daily wear.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Look sharp every day with Smiley Dry Cleaning's <strong>premium steam ironing service in
                                Manjeri</strong>. We use industrial-grade steam press machines to ensure your clothes are
                            crisp, wrinkle-free, and perfectly finished. Unlike regular ironing, steam ironing protects the
                            fabric integrity while removing stubborn creases.</p>
                        <h3>Why Choose Our Steam Ironing?</h3>
                        <ul>
                            <li>Antibacterial steam treatment</li>
                            <li>Prevents fabric burns and shine marks</li>
                            <li>Perfect for office wear, shirts, and trousers</li>
                            <li>Fast turnaround time</li>
                        </ul>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Antibacterial Steam</li>
                                <li><span class="check-icon">✓</span> No Shine Marks</li>
                                <li><span class="check-icon">✓</span> Perfect Creases</li>
                                <li><span class="check-icon">✓</span> Same Day Service</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">♨️</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    How long does steam ironing take?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>For standard orders, we offer 24-48 hour turnaround. Express service is available for
                                        same-day delivery.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Will steam ironing burn my clothes?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>No. Our industrial steam presses use controlled temperature and steam, which is much
                                        safer for fabrics than direct contact hot plates used in home irons.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Do you provide pickup for ironing only?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Yes! We offer free pickup and delivery for all service orders above a minimum value.
                                    </p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Steam Ironing</h3>
                        <p>Fast pickup & delivery in Manjeri.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Steam%20Ironing%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection