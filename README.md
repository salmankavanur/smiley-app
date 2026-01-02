# Smiley Dry Cleaning Web Application

A modern, responsive, and SEO-optimized web application for **Smiley Dry Cleaning**, based in Manjeri, Malappuram. Built with **Laravel 10**, **Vite**, and **Custom CSS**, featuring a dynamic Dark/Light mode, specialized service pages, and an admin content management system.

## 🚀 Features

-   **Modern UI/UX**: Responsive design with smooth GSAP animations and Glassmorphism effects.
-   **Dark/Light Mode**: User preference persistence with a seamless toggle.
-   **Service Catalog**: Detailed pages for Dry Cleaning, Shoe Laundry, Carpet Cleaning, etc., with SEO-friendly URLs.
-   **SEO Optimized**: Dynamic meta tags, structured data, and sitemap generation.
-   **Offers & Pricing**: Promotional banners and pricing visibility.
-   **Contact Integration**: Direct WhatsApp and Call buttons for easy booking.

## 🛠 Tech Stack

-   **Backend**: Laravel (PHP 8.2+)
-   **Frontend**: Blade Templates, Vanilla CSS (Variables-based theming), JavaScript (ES6+), GSAP (Animations).
-   **Build Tool**: Vite.
-   **Database**: MySQL / SQLite (Dev).

---

## 💻 Local Developement Setup

Follow these steps to set up the project locally:

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/smiley-app.git
    cd smiley-app
    ```

2.  **Install PHP Dependencies**
    ```bash
    composer install
    ```

3.  **Install Node Dependencies**
    ```bash
    npm install
    ```

4.  **Environment Configuration**
    -   Copy `.env.example` to `.env`.
    -   Update database credentials in `.env` (DB_DATABASE, DB_USERNAME, etc.).
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Database Migration & Seeding**
    -   Create the database if it doesn't exist.
    -   Run migrations and seed default services.
    ```bash
    php artisan migrate --seed
    ```

6.  **Run Development Server**
    -   Start Laravel server:
        ```bash
        php artisan serve
        ```
    -   Start Vite (Frontend assets):
        ```bash
        npm run dev
        ```

7.  **Access the App**
    -   Open `http://127.0.0.1:8000` in your browser.

---

## 🌍 Deployment Guide

### Option 1: Shared Hosting (cPanel)

1.  **Build Assets Locally**
    -   Run the production build command to compile CSS/JS.
    ```bash
    npm run build
    ```
    -   This creates the `public/build` directory.

2.  **Prepare Files**
    -   Zip the entire project folder (excluding `node_modules`).

3.  **Upload to Server**
    -   Upload the zip to your file manager (e.g., outside `public_html`, maybe `smiley-app` folder).
    -   Extract the files.

4.  **Database Setup**
    -   Create a database and user in cPanel MySQL Wizard.
    -   Import your local database SQL dump or run migrations via SSH if available.

5.  **Configuration**
    -   Edit `.env` file with production DB credentials and `APP_URL`.
    -   Set `APP_ENV=production` and `APP_DEBUG=false`.

6.  **Public Folder Linking**
    -   Move the contents of `public/` to your `public_html` (or subdomain folder).
    -   Edit `index.php` in `public_html`:
        ```php
        require __DIR__.'/../smiley-app/vendor/autoload.php';
        $app = require_once __DIR__.'/../smiley-app/bootstrap/app.php';
        ```
    -   Ensure paths point correctly to your core files.

### Option 2: VPS (DigitalOcean/AWS with Nginx)

1.  **Server Setup**
    -   Install PHP 8.2, Nginx, MySQL, Composer, Git.

2.  **Clone & Install**
    ```bash
    cd /var/www
    git clone ... smiley-app
    cd smiley-app
    composer install --optimize-autoloader --no-dev
    ```

3.  **Permissions**
    ```bash
    chown -R www-data:www-data storage bootstrap/cache
    chmod -R 775 storage bootstrap/cache
    ```

4.  **Environment**
    -   Setup `.env` and `php artisan key:generate`.
    -   `php artisan migrate --seed --force`.

5.  **Build Assets**
    ```bash
    npm install
    npm run build
    ```

6.  **Nginx Config**
    -   Point root to `/var/www/smiley-app/public`.
    -   Example location block:
        ```nginx
        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }
        ```

7.  **Restart Services**
    ```bash
    sudo systemctl restart nginx
    sudo systemctl restart php8.2-fpm
    ```

---

## 📄 License
This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
