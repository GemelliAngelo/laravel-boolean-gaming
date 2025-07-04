<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GamesController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\PlatformsController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("games", GamesController::class)->middleware(["auth", "verified"]);
Route::resource("platforms", PlatformsController::class)->middleware(["auth", "verified"]);
Route::resource("genres", GenresController::class)->middleware(["auth", "verified"]);

require __DIR__ . '/auth.php';
