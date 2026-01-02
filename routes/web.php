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
    $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
    return view('service.show', compact('service'));
})->name('service.show');
