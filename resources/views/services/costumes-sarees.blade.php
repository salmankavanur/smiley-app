@extends('layouts.app')

@section('title', 'Bridal Saree & Wedding Dress Dry Cleaning Manjeri')
@section('meta_description', 'Trust your expensive wedding sarees and designer dresses with us. Specialized silk saree dry cleaning in Manjeri.')
@section('meta_keywords', 'saree polishing manjeri, silk saree dry cleaning, wedding dress cleaning, designer wear laundry')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Costumes &
                    Sarees</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Costumes & Sarees</h1>
                        <p class="service-intro">Delicate care for expensive and intricate fabrics.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>We specialize in <strong>bridal saree and wedding dress dry cleaning in Manjeri</strong>. Whether
                            it's heavy Kanchipuram silk, designer lehengas, or stone-work gowns, our gentle cleaning process
                            preserves the embroidery and fabric luster. Trusted by hundreds of brides for post-wedding
                            preservation.</p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Zari Polishing</li>
                                <li><span class="check-icon">✓</span> Stone Work Care</li>
                                <li><span class="check-icon">✓</span> Silk Conditioning</li>
                                <li><span class="check-icon">✓</span> Roll Pressing</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">👗</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Is roll pressing included?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Yes, for sarees, roll pressing is part of the service to ensure a crisp, wrinkle-free
                                        finish.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Is it safe for heavy stone work?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Yes, we cover delicate embellishments before cleaning to identify them and treat them
                                        manually if needed.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Saree Cleaning</h3>
                        <p>Fast pickup & delivery in Manjeri.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Saree%20Cleaning%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection