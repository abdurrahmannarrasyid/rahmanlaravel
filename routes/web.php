<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/tentang-kami', 'pages.tentang-kami', ['title' => 'Tentang Kami'])->name('about');
Route::view('/layanan', 'pages.layanan-kami', ['title' => 'Layanan'])->name('services');
Route::view('/artikel', 'pages.static', ['title' => 'Artikel'])->name('articles');
Route::view('/hubungi-kami', 'pages.static', ['title' => 'Hubungi Kami'])->name('contact');


Route::get('/cari', function (\Illuminate\Http\Request $r) {
    return view('pages.search', ['q' => $r->get('q')]);
})->name('search');