@extends('layouts.app')

@section('title', 'Premium Suit & Blazer Dry Cleaning Manjeri')
@section('meta_description', 'Expert care for suits, blazers, and coats. Maintain the perfect fit and fabric quality with Smiley Dry Cleaning Manjeri.')
@section('meta_keywords', 'suit dry cleaning manjeri, blazer cleaning, coat dry clean, formal wear cleaning')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Suits &
                    Blazers</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Suits & Blazers</h1>
                        <p class="service-intro">Professional dry cleaning to maintain fabric quality and fit.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Your power suit deserves professional care. Our <strong>suit and blazer dry cleaning in
                                Manjeri</strong> focuses on maintaining the structure, lining, and fabric sheen. We treat
                            collars and cuffs specially to remove sweat marks without damaging the delicate wool or blend
                            fabrics.</p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Hand Finishing</li>
                                <li><span class="check-icon">✓</span> Structure Preservation</li>
                                <li><span class="check-icon">✓</span> Lint Removal</li>
                                <li><span class="check-icon">✓</span> Premium Packaging</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">👔</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    How often should I dry clean my suit?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>It depends on usage, but typically after 3-4 wears to prevent sweat and dirt buildup.
                                    </p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Can you remove shine marks from ironing?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>We can improve the appearance, but severe shine marks from improper home ironing are
                                        damage to the fabric fiber and may be permanent. We prevent this by using proper
                                        pressing equipment.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Suit Cleaning</h3>
                        <p>Fast pickup & delivery in Manjeri.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Suits%20Cleaning%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection