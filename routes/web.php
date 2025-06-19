<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StandbuilderController;
use App\Http\Controllers\ShowController;


/**
 * //////////////////////////////////////////////////////////
 * ====================== Static Routes =====================
 * //////////////////////////////////////////////////////////
 */

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/about-us', function() {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function() {
    return view('contact-us');
})->name('contact-us');

Route::get('/privacy-policy', function() {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/login', function() {
    return view('login');
})->name('login');

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


