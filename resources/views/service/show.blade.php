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
    </style>
@endsection