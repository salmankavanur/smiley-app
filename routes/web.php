<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;


Route::get('/', function () {
    $services = \App\Models\Service::all();
    return view('home', compact('services'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services/{slug}', function ($slug) {
    // Mapping for dedicated static pages
    $dedicatedViews = [
        'steam-ironing-service-Manjeri, Malappuram' => 'services.steam-ironing',
        'shoe-laundry-cleaning-Manjeri, Malappuram' => 'services.shoe-cleaning',
        'blanket-quilt-cleaning-Manjeri, Malappuram' => 'services.blanket-washing',
        'bag-soft-toy-cleaning-Manjeri, Malappuram' => 'services.bag-toys-cleaning',
        'curtain-dry-cleaning-Manjeri, Malappuram' => 'services.curtain-cleaning',
        'carpet-rug-cleaning-Manjeri, Malappuram' => 'services.carpet-cleaning',
        'suit-blazer-dry-cleaning-Manjeri, Malappuram' => 'services.suits-blazers',
        'saree-wedding-dress-dry-cleaning-Manjeri, Malappuram' => 'services.costumes-sarees',
        'stain-removal-service-Manjeri, Malappuram' => 'services.stain-removing',
    ];

    if (array_key_exists($slug, $dedicatedViews)) {
        return view($dedicatedViews[$slug]);
    }

    // Fallback to database-driven dynamic page
    $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
    return view('service.show', compact('service'));
})->name('service.show');
