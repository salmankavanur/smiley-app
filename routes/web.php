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
        'steam-ironing-service-manjeri' => 'services.steam-ironing',
        'shoe-laundry-cleaning-manjeri' => 'services.shoe-cleaning',
        'blanket-quilt-cleaning-manjeri' => 'services.blanket-washing',
        'bag-soft-toy-cleaning-manjeri' => 'services.bag-toys-cleaning',
        'curtain-dry-cleaning-manjeri' => 'services.curtain-cleaning',
        'carpet-rug-cleaning-manjeri' => 'services.carpet-cleaning',
        'suit-blazer-dry-cleaning-manjeri' => 'services.suits-blazers',
        'saree-wedding-dress-dry-cleaning-manjeri' => 'services.costumes-sarees',
        'stain-removal-service-manjeri' => 'services.stain-removing',
    ];

    if (array_key_exists($slug, $dedicatedViews)) {
        return view($dedicatedViews[$slug]);
    }

    // Fallback to database-driven dynamic page
    $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
    return view('service.show', compact('service'));
})->name('service.show');
