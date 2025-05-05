<?php

use App\Http\Controllers\Api\GamesController;
use App\Http\Controllers\Api\GenresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('games', [GamesController::class, 'index']);
Route::get('games/{id}', [GamesController::class, 'show']);
Route::get('genres', [GenresController::class, 'index']);
