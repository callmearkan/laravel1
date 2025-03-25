<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route Homepage
Route::get('/', function () {
    $title = (object) ['slug' => 'homepage'];
    return view('web.homepage', compact('title'));
});

// Route Halaman Statis
Route::get('/halaman', function () {
    return "Ini adalah halaman Home Page";
});

Route::get('/keranjang', function () {
    return 'Ini halaman keranjang';
});

// Route Products
Route::get('products', function () {
    $title = (object) ['slug' => 'products'];
    return view('web.products', compact('title'));
});

// Route Single Product
Route::get('product/{slug}', function ($slug) {
    return "Halaman Single Product - " . $slug;
});

// Route Categories
Route::get('categories', function () {
    return "Halaman Categories Product";
});

// Route Single Category
Route::get('category/{slug}', function ($slug) {
    return "Halaman Single Category - " . $slug;
});

// Route Cart & Checkout
Route::get('cart', function () {
    return "Halaman Cart";
});

Route::get('checkout', function () {
    return "Halaman Checkout";
});

// Route Dashboard (Hanya untuk User yang Terautentikasi)
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Group Middleware Auth untuk Settings
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// Load Route Authentication
require __DIR__ . '/auth.php';
