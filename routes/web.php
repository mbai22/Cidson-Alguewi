<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/biographie', function () {
    return view('bio');
})->name('bio');

Route::get('/galerie', function () {
    return view('galerie');
})->name('galerie');

Route::get('/armee-rouge', function () {
    return view('armee-rouge');
})->name('armee-rouge');

Route::get('/a-propos', function () {
    return view('about');
})->name('about');

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
