@extends('layouts.app')

@section('title', 'Hygienic Blanket & Quilt Cleaning in Manjeri | Smiley Dry Cleaning')
@section('meta_description', 'Deep cleaning for blankets, quilts, and comforters in Manjeri. Remove allergens and dust mites with our specialized heavy laundry service.')
@section('meta_keywords', 'blanket cleaning manjeri, quilt washing, comforter dry cleaning, heavy laundry service manjeri')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Blanket
                    Washing</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Blanket Washing</h1>
                        <p class="service-intro">Deep cleaning for heavy blankets and comforters.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Sleeping on a clean bed is essential for health. Our <strong>heavy blanket and quilt cleaning
                                service in Manjeri</strong> removes dust mites, allergens, and accumulated sweat. We use
                            large-capacity commercial washers that standard home machines cannot match.</p>
                        <p>Perfect for comforters, duvets, mink blankets, and heavy quilts. Hygienically washed and
                            perfectly dried.</p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Dust Mite Removal</li>
                                <li><span class="check-icon">✓</span> Allergen Free</li>
                                <li><span class="check-icon">✓</span> Softness Restored</li>
                                <li><span class="check-icon">✓</span> Hygienic Packaging</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">🛏️</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    How often should I clean my blanket?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>We recommend cleaning heavy blankets at least once every 3-6 months to prevent
                                        allergen buildup.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Can you remove old stains from quilts?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>We have a high success rate with stain removal, but it depends on the age and type of
                                        the stain. We always try our best!</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Blanket Washing</h3>
                        <p>Fast pickup & delivery in Manjeri.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Blanket%20Washing%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection