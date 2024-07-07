<?php

use App\Http\Controllers\Laravel1Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Models\Laravel_1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('Laravel_1s', Laravel1Controller::class)
    ->only(['index', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);

Route::resource('Test', TestController::class);

require __DIR__.'/auth.php';
