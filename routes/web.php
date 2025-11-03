<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage');
})->name('landing');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', fn() => Inertia::render('test'))->name('test');
Route::get('/landing', fn() => Inertia::render('LandingPage'))->name('landing');
Route::get('/reservasi', fn() => Inertia::render('Reservasi'));
Route::get('/test1', fn() => Inertia::render('test1'));
Route::get('/order', fn() => Inertia::render('Order'));
Route::get('/admin-dashboard', fn() => Inertia::render('AdminDashboard'));
Route::get('/user-profile', function () {
    return Inertia::render('Profile', [
        'user' => Auth::user(),
    ]);
})->middleware(['auth']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
