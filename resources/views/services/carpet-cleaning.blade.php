@extends('layouts.app')

@section('title', 'Professional Carpet Cleaning Manjeri, Malappuram | Deep Stain Removal')
@section('meta_description', 'Best carpet cleaning in Manjeri, Malappuram. We remove stubborn stains, dirt, and allergens from rugs and carpets. Book your slot today.')
@section('meta_keywords', 'carpet cleaning Manjeri, Malappuram, rug washing, carpet shampooing, floor cleaning service')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Carpet
                    Cleaning</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Carpet Cleaning</h1>
                        <p class="service-intro">Deep extraction cleaning for carpets and rugs.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Restore the vibrant colors of your floor with our <strong>carpet and rug cleaning service in
                                Manjeri, Malappuram</strong>. We use deep extraction technology to pull out dirt, sand, and
                            stains
                            buried deep within the fibers. Ideal for Persian rugs, synthetic carpets, and office flooring.
                        </p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Deep Extraction</li>
                                <li><span class="check-icon">✓</span> Pet Odor Removal</li>
                                <li><span class="check-icon">✓</span> Quick Drying</li>
                                <li><span class="check-icon">✓</span> Fiber Protection</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">🧶</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    How long does it take for carpets to dry?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Our extraction method leaves carpets slightly damp, usually drying completely within
                                        4-6 hours depending on ventilation.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Do you clean carpets onsite?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>For large wall-to-wall carpets, we clean onsite. For rugs, we recommend taking them
                                        to our facility for a deeper wash.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Carpet Cleaning</h3>
                        <p>Fast pickup & delivery in Manjeri, Malappuram.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Carpet%20Cleaning%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection