@extends('layouts.app')

@section('title', 'Expert Stain Removal Service Manjeri, Malappuram | Ink, Oil, Wine Stains')
@section('meta_description', 'Professional stain removal service. We remove tough stains like ink, oil, and coffee from all types of fabrics. 99% Success rate.')
@section('meta_keywords', 'stain removal Manjeri, Malappuram, laundry stain remover, clothes spot cleaning')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Stain
                    Removing</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Stain Removing</h1>
                        <p class="service-intro">Expert stain removal techniques for stubborn marks.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Got a tough stain? Don't risk setting it further. Bring it to the <strong>stain removal experts
                                in Manjeri, Malappuram</strong>. We treat ink, oil, grease, coffee, and wine stains using targeted
                            chemical agents that are tough on stains but gentle on clothes.</p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Ink & Oil Specialists</li>
                                <li><span class="check-icon">✓</span> Color Safe</li>
                                <li><span class="check-icon">✓</span> Fabric Analysis</li>
                                <li><span class="check-icon">✓</span> Success Guarantee</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">💧</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Can you remove all stains?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>We can remove most organic and chemical stains. However, old stains that have been
                                        ironed over or treated with incorrect home remedies may be set permanently.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Does stain removal cost extra?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Basic stain removal is included, but extensive treatment for heavy stains may have a
                                        surcharge.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Stain Removal</h3>
                        <p>Fast pickup & delivery in Manjeri, Malappuram.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Stain%20Removal%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection