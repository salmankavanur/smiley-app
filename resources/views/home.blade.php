@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container hero-layout">
            <div class="hero-text">
                <h1>Freshness that make you <span class="highlight">Smile :)</span></h1>
                <p class="hero-subtitle">Premium Dry Cleaning & Live Laundry in Manjeri</p>
                <div class="hero-actions">
                    <a href="#services" class="btn btn-primary">Our Services</a>
                    <a href="tel:+919847677300" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
            <div class="hero-visual">
                <!-- Decorative smiley or abstraction -->
                <div class="smiley-circle">
                    <div class="eyes">
                        <div class="eye"></div>
                        <div class="eye"></div>
                    </div>
                    <div class="mouth"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">What We Clean</h2>
            <p class="section-subtitle">Expert care for your favorite items</p>

            <div class="services-grid">
                @foreach($services as $service)
                    <div class="service-card">
                        <div class="service-icon icon-{{ $service->icon }}">
                            <!-- Placeholder for actual icons -->
                            <div class="icon-placeholder"></div>
                        </div>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="container">
            <div class="info-box">
                <h2>Express Live Laundry</h2>
                <p>Get your clothes cleaned while you wait! Experience our state-of-the-art live laundry service.</p>
            </div>
        </div>
    </section>
@endsection