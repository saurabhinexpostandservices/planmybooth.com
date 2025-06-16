<?php

use Illuminate\Support\Facades\Route;

/**
 * //////////////////////////////////////////////////////////
 * ====================== Static Routes =====================
 * //////////////////////////////////////////////////////////
 */
Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/stand-builders', function () {
    return view('stand-builders');
});

Route::get('/trade-show', function () {
    return view('trade-show');
});
