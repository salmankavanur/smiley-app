@extends('layouts.app')

@section('title', 'Curtain Dry Cleaning Service in Manjeri | Home Interior Cleaning')
@section('meta_description', 'Professional curtain dry cleaning in Manjeri. Remove dust, stains, and odors from your drapes. Pickup and delivery available.')
@section('meta_keywords', 'curtain cleaning manjeri, drapery cleaning, window blind cleaning, dry cleaners for curtains')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Curtain
                    Cleaning</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Curtain Cleaning</h1>
                        <p class="service-intro">Dust and stain removal to refresh your home interiors.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Revitalize your home with our <strong>curtain dry cleaning service in Manjeri</strong>. Curtains
                            act as air filters, trapping dust and odors. Our process removes these contaminants while
                            preserving the color and texture of the fabric. We handle removal and re-installation upon
                            request.</p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Dust Removal</li>
                                <li><span class="check-icon">✓</span> Pleat Preservation</li>
                                <li><span class="check-icon">✓</span> No Shrinkage</li>
                                <li><span class="check-icon">✓</span> Odor Neutralization</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">🪟</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Do you remove and reinstall curtains?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Yes, we offer a re-installation service for a small additional fee.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Will my curtains shrink?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>No, we use dry cleaning methods specifically designed to prevent shrinkage in curtain
                                        fabrics.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Curtain Cleaning</h3>
                        <p>Fast pickup & delivery in Manjeri.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Curtain%20Cleaning%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection