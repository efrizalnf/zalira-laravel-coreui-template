<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Fitur1\Fitur1;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('landing');
})->name('home');

// Dashboard dengan middleware auth dan verified
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/fitur1', Fitur1::class)->name('fitur1');
});

// Grup route untuk profile dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Include file auth
require __DIR__.'/auth.php';
