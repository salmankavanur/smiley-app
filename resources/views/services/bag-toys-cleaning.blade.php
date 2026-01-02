@extends('layouts.app')

@section('title', 'Bag & Soft Toy Cleaning Service in Manjeri, Malappuram')
@section('meta_description', 'Expert cleaning for travel bags, school bags, and soft toys in Manjeri, Malappuram. Safe, non-toxic, and hygienic cleaning process.')
@section('meta_keywords', 'bag cleaning Manjeri, Malappuram, trolley bag repair cleaning, soft toy washing, teddy bear cleaning Manjeri, Malappuram')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span class="current">Bag & Toys
                    Cleaning</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">Bag & Toys Cleaning</h1>
                        <p class="service-intro">Safe and effective cleaning for bags and stuffed toys.</p>
                    </header>

                    <div class="service-body rich-text">
                        <p>Don't let dirt ruin your favorite travel bags or your child's teddy bear. We offer specialized
                            <strong>cleaning for school bags, luggage, and soft toys in Manjeri, Malappuram</strong>. We use
                            skin-safe,
                            non-toxic detergents to ensure that toys are safe for children to play with after cleaning.
                        </p>
                    </div>

                    <!-- Visual Features Section -->
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                <li><span class="check-icon">✓</span> Child-Safe Detergents</li>
                                <li><span class="check-icon">✓</span> Mold Removal</li>
                                <li><span class="check-icon">✓</span> Zipper Lubrication</li>
                                <li><span class="check-icon">✓</span> Tough Stain Removal</li>
                            </ul>
                        </div>
                        <div class="vf-image">
                            <div class="vf-icon-circle">🎒</div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Is the detergent safe for kids?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Yes, for soft toys, we use certified hypoallergenic and non-toxic detergents.</p>
                                </div>
                            </details>
                            <details class="faq-item">
                                <summary class="faq-question">
                                    Can you clean trolley bags?
                                    <span class="toggle-icon">+</span>
                                </summary>
                                <div class="faq-answer">
                                    <p>Yes, we clean hard and soft shell trolley bags, including the wheels and handles.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book Bag Cleaning</h3>
                        <p>Fast pickup & delivery in Manjeri, Malappuram.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20Bag%20Cleaning%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection