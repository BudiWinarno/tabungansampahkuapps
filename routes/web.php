<?php

use App\Http\Controllers\JenissampahController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ManagementpenggunaController;
use App\Http\Controllers\MasterBankController;
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

Route::middleware(['auth'])->group(function () {

    Route::get(
        '/master-data/jenis-sampah',
        [JenissampahController::class, 'index']
    )->name('jenis-sampah.index');

    Route::get(
        '/master-data/jenis-sampah/create',
        [JenissampahController::class, 'create']
    )->name('jenis-sampah.create');

    Route::post(
        '/master-data/jenis-sampah',
        [JenissampahController::class, 'store']
    )->name('jenis-sampah.store');

    Route::delete(
        '/master-data/jenis-sampah/{jenisSampah}',
        [JenissampahController::class, 'destroy']
    )->name('jenis-sampah.destroy');

    Route::get(
        '/master-data/jenis-sampah/{jenisSampah}/edit',
        [JenissampahController::class, 'edit']
    )->name('jenis-sampah.edit');

    Route::put(
        '/master-data/jenis-sampah/{jenisSampah}',
        [JenissampahController::class, 'update']
    )->name('jenis-sampah.update');

    //Management Pengguna
    Route::get(
        '/management-pengguna',
        [ManagementpenggunaController::class, 'index']
    )->name('management-pengguna.index');

    Route::get(
        '/management-pengguna/create',
        [ManagementpenggunaController::class, 'create']
    )->name('management-pengguna.create');

    Route::post(
        '/management-pengguna/store',
        [ManagementpenggunaController::class, 'store']
    )->name('management-pengguna.store');

    Route::delete(
        '/management-pengguna/{id}',
        [ManagementpenggunaController::class, 'destroy']
    )->name('management-pengguna.destroy');

    Route::get(
        '/management-pengguna/{id}/edit',
        [ManagementpenggunaController::class, 'edit']
    )->name('management-pengguna.edit');

    Route::get(
        '/management-pengguna/{id}/edit',
        [ManagementpenggunaController::class, 'edit']
    )->name('management-pengguna.edit');

    Route::put(
        '/management-pengguna/{id}',
        [ManagementpenggunaController::class, 'update']
    )->name('management-pengguna.update');

    // Master Data Bank
    Route::get(
        '/master-data/bank',
        [MasterBankController::class, 'index']
    )->name('master-bank.index');

    Route::get(
        '/master-data/bank/create',
        [MasterBankController::class, 'create']
    )->name('master-bank.create');

    Route::post(
        '/master-data/bank/store',
        [MasterBankController::class, 'store']
    )->name('master-bank.store');

    Route::get(
        '/master-data/bank/{id}/edit',
        [MasterBankController::class, 'edit']
    )->name('master-bank.edit');

    Route::put(
        '/master-data/bank/{id}',
        [MasterBankController::class, 'update']
    )->name('master-bank.update');

    Route::delete(
        '/master-data/bank/{id}',
        [MasterBankController::class, 'destroy']
    )->name('master-bank.destroy');
});

require __DIR__ . '/auth.php';
