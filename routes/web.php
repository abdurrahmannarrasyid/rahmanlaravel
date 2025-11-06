<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 

Route::view('/', 'pages.home')->name('home');
Route::view('/tentang-kami', 'pages.tentang-kami', ['title' => 'Tentang Kami'])->name('about');
Route::view('/layanan', 'pages.layanan-kami', ['title' => 'Layanan'])->name('services');
Route::view('/artikel', 'pages.artikel', ['title' => 'Artikel'])->name('articles');
Route::view('/hubungi-kami', 'pages.hubungi-kami', ['title' => 'Hubungi Kami'])->name('contact');
Route::post('/hubungi-kami', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/cari', function (\Illuminate\Http\Request $r) {
    return view('pages.search', ['q' => $r->get('q')]);
})->name('search');