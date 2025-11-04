<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage');
})->name('landing');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/laundry-history', function () {
    return Inertia::render('auth/LaundryHistory');
})->middleware(['auth']);

Route::get('/my-laundry', function () {
    return Inertia::render('auth/MyLaundry');
})->middleware(['auth']);
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
use App\Http\Controllers\ProfileController;

Route::middleware(['auth'])->group(function () {
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
