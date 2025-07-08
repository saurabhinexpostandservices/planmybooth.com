<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StandbuilderController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\PublicController;


/**
 * //////////////////////////////////////////////////////////
 * ====================== Static Routes =====================
 * //////////////////////////////////////////////////////////
 */

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/stand-builders', [StandbuilderController::class, 'index'])->name('stand-builders');

Route::get('/about-us', function() {
    return view('about-us');
})->name('about-us');

Route::get('/vendor-registration', function() {
    return view('vendor-registration');
})->name('vendor-registration');

Route::get('/contact-us', function() {
    return view('contact-us');
})->name('contact-us');

Route::get('/privacy-policy', function() {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function() {
    return view('auth.forgot-password');
})->name('forgot-password');


Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');

Route::get('/stand-builders', [StandbuilderController::class, 'index'])->name('stand-builders');

Route::get('/trade-shows', [ShowController::class, 'index'])->name('shows');

/**
 * /////////////////////////////////////////////////////////
 * ====================== Dynamic Routes ===================
 * /////////////////////////////////////////////////////////
 */

Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.inner');
Route::get('/trade-shows/{slug}', [ShowController::class, 'show'])->name('shows.inner');
Route::get('/stand-builders/{username}', [StandbuilderController::class, 'show'])->name('stand-builder.show');
Route::post('/lead/create', [\App\Http\Controllers\LeadController::class, 'create'])->name('api.lead.create');


/**
 * /////////////////////////////////////////////////////////
 * ======================= Api Routes ======================
 * /////////////////////////////////////////////////////////
 */

Route::get('/api/pages', [PublicController::class, 'fetch_city_for_search'])->name('api.search');
Route::get('/api/countries', [PublicController::class, 'fetch_country_for_home'])->name('api.home-countries');
