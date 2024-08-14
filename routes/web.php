<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IconController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('icon')->group(function () {

    Route::get('/', [IconController::class, 'index'])->name('icon.index');
    Route::get('/create', [IconController::class, 'create'])->name('icon.create');
    Route::get('/edit', [IconController::class, 'edtt'])->name('icon.edit');
    Route::post('/store', [IconController::class, 'edtt'])->name('icon.store');
    Route::patch('/update', [IconController::class, 'edtt'])->name('icon.update');
    Route::delete('/destroy', [IconController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
