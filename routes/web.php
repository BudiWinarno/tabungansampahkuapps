<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingpageController::class, 'index'])->name('index');
Route::get('/tentangkami', [LandingpageController::class, 'tentangkami'])->name('tentangkami');
Route::get('/lokasibanksampah', [LandingpageController::class, 'lokasibanksampah'])->name('lokasibanksampah');
Route::get('/beritaartikel', [LandingpageController::class, 'artikelberita'])->name('artikelberita');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
