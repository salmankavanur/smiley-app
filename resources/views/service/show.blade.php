@extends('layouts.app')

@section('title', $service->meta_title ?? $service->title . ' Service in Manjeri | Smiley Dry Cleaning')
@section('meta_description', $service->meta_description ?? 'Professional ' . $service->title . ' service in Manjeri. Best care for your clothes. Book now.')
@section('meta_keywords', $service->meta_keywords ?? 'Laundry Manjeri, ' . $service->title . ' Manjeri')

@section('content')
    <div class="service-page-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Home</a> <span class="separator">/</span> <span
                    class="current">{{ $service->title }}</span>
            </nav>

            <div class="service-layout">
                <div class="service-main">
                    <header class="service-header">
                        <h1 class="service-h1">{{ $service->title }}</h1>
                        <p class="service-intro">{{ $service->description }}</p>
                    </header>

                    <div class="service-body rich-text">
                        {!! $service->content !!}
                    </div>

                    <!-- Visual Features Section -->
                    @if($service->features)
                    <div class="visual-feature-box">
                        <div class="vf-content">
                            <h3>Why Choose This Service?</h3>
                            <ul class="vf-list">
                                @foreach(json_decode($service->features) as $feature)
                                    <li>
                                        <span class="check-icon">✓</span> {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="vf-image">
                             <!-- Dynamic efficient icon/image fallback -->
                             <div class="vf-icon-circle">
                                 @if($service->icon == 'shoe') 👟 
                                 @elseif($service->icon == 'iron') ♨️
                                 @elseif($service->icon == 'blanket') 🛏️
                                 @elseif($service->icon == 'bag') 🎒
                                 @elseif($service->icon == 'curtain') 🪟
                                 @elseif($service->icon == 'suit') 👔
                                 @elseif($service->icon == 'saree') 👗
                                 @else ✨ @endif
                             </div>
                        </div>
                    </div>
                    @endif

                    <!-- FAQ Section -->
                    @if($service->faqs)
                    <div class="faq-section">
                        <h3>Frequently Asked Questions</h3>
                        <div class="faq-list">
                            @foreach(json_decode($service->faqs) as $faq)
                                <details class="faq-item">
                                    <summary class="faq-question">
                                        {{ $faq->question }}
                                        <span class="toggle-icon">+</span>
                                    </summary>
                                    <div class="faq-answer">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </details>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <aside class="service-sidebar">
                    <div class="booking-widget sticky-widget">
                        <h3>Book {{ $service->title }}</h3>
                        <p>Fast pickup & delivery in Manjeri.</p>
                        <ul class="benefit-list">
                            <li>✓ 48h Turnaround</li>
                            <li>✓ Premium Detergents</li>
                            <li>✓ Expert Handling</li>
                        </ul>
                        <a href="https://wa.me/919847677300?text=Hi%2C%20I%20want%20to%20book%20{{ urlencode($service->title) }}%20service."
                            class="btn-primary full-width">
                            Book via WhatsApp
                            <span style="margin-left:8px">→</span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <style>
        .service-page-wrapper {
            padding-top: 140px;
            /* Space for fixed header */
            padding-bottom: 80px;
            background: #fafafa;
            min-height: 100vh;
        }

        .breadcrumb {
            font-size: 0.9rem;
            color: var(--text-sub);
            margin-bottom: 40px;
        }

        .breadcrumb a {
            color: var(--dark);
            font-weight: 500;
        }

        .breadcrumb .separator {
            margin: 0 8px;
            color: #ddd;
        }

        .service-layout {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 60px;
        }

        .service-h1 {
            font-family: var(--font-heading);
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 16px;
            color: var(--dark);
            line-height: 1.1;
        }

        .service-intro {
            font-size: 1.25rem;
            color: var(--text-sub);
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .rich-text p {
            margin-bottom: 24px;
            line-height: 1.8;
            font-size: 1.1rem;
            color: #333;
        }

        .rich-text h3 {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: 700;
            color: var(--dark);
        }

        .rich-text ul {
            margin-bottom: 30px;
            padding-left: 20px;
        }

        .rich-text li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 10px;
        }

        .booking-widget {
            background: #fff;
            padding: 32px;
            border-radius: 24px;
            box-shadow: var(--shadow-lg);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .sticky-widget {
            position: sticky;
            top: 120px;
        }

        .booking-widget h3 {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        .benefit-list {
            list-style: none;
            margin: 24px 0;
            padding: 0;
        }

        .benefit-list li {
            margin-bottom: 12px;
            font-weight: 500;
            color: #555;
        }

        .full-width {
            width: 100%;
            justify-content: center;
            text-align: center;
        }

        @media (max-width: 900px) {
            .service-layout {
                grid-template-columns: 1fr;
            }
        }

        /* Visual Feature Box */
        .visual-feature-box {
            background: #fff;
            border-radius: 24px;
            padding: 40px;
            margin: 40px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.03);
        }

        .vf-content h3 {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .vf-list {
            list-style: none;
            padding: 0;
        }

        .vf-list li {
            margin-bottom: 12px;
            font-weight: 500;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
        }

        .check-icon {
            color: var(--primary-dark);
            margin-right: 12px;
            font-weight: 800;
        }

        .vf-image {
            flex-shrink: 0;
            margin-left: 40px;
        }

        .vf-icon-circle {
            width: 100px;
            height: 100px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            box-shadow: 0 10px 20px rgba(255, 214, 0, 0.4);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @media (max-width: 600px) {
            .visual-feature-box {
                flex-direction: column-reverse;
                text-align: center;
            }
            .vf-image {
                margin-left: 0;
                margin-bottom: 20px;
            }
            .vf-list li {
                justify-content: center;
            }
        }

        /* FAQ Section */
        .faq-section {
            margin-top: 60px;
        }

        .faq-section h3 {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--dark);
        }

        .faq-item {
            background: #fff;
            margin-bottom: 16px;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }

        .faq-question {
            padding: 24px;
            font-weight: 700;
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.1rem;
            color: var(--dark);
        }
        
        /* Hide default summary marker */
        .faq-question::-webkit-details-marker {
            display: none;
        }

        .toggle-icon {
            font-size: 1.5rem;
            font-weight: 300;
            transition: transform 0.3s ease;
        }

        .faq-item[open] .toggle-icon {
            transform: rotate(45deg);
        }

        .faq-item[open] .faq-question {
            background: #fff; /* Keep white */
            border-bottom: 1px solid #f0f0f0;
        }

        .faq-answer {
            padding: 24px;
            padding-top: 0;
            color: #555;
            line-height: 1.6;
            background: #fff;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endsection