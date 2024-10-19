<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IconController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [IconController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('icon')->group(function () {
    Route::get('/create', [IconController::class, 'create'])->name('icon.create');
    Route::get('/{icon}/edit', [IconController::class, 'edit'])->name('icon.edit');
    Route::post('/store', [IconController::class, 'store'])->name('icon.store');
    Route::patch('/{icon}/update', [IconController::class, 'update'])->name('icon.update');
    Route::delete('/{icon}/destroy', [IconController::class, 'destroy'])->name('icon.destroy');
})->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/download', [HomeController::class, 'download'])->name('download');

require __DIR__ . '/auth.php';
