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
