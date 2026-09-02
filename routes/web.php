<?php

use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard User (Siswa)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Fitur & Dashboard Admin
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Akses ditolak. Anda bukan admin.');
        }
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('buku', BukuController::class);
});

// Route Profile bawaan Breeze
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';