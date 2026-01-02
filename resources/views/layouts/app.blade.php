<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smiley Dry Cleaning - Expert Laundry & Dry Cleaning Services in Manjeri">
    <title>@yield('title', 'Smiley Dry Cleaning')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="site-header">
        <div class="container header-container">
            <a href="{{ route('home') }}" class="brand-logo">
                <span class="smiley-icon">:)</span> Smiley <span class="highlight">Dry</span>
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#process">How it Works</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="tel:+919847677300" class="btn-primary">Call Now</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <div class="footer-brand">
                <h3>Smiley Dry Cleaning</h3>
                <p>Fresh Clothes, Happy You.</p>
            </div>
            <div class="footer-contact">
                <p>Near Noor Masjid, opp. SBI ATM, Chettiyangadi</p>
                <p>Areekod Road, MANJERI</p>
                <p>Phone: 9847 677 300</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Smiley Dry Cleaning. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>