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

Route::get('/musique', function () {
    return view('musique');
})->name('musique');

Route::get('/evenements', function () {
    return view('evenements');
})->name('evenements');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
