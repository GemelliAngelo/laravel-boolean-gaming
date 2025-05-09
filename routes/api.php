<?php

use App\Http\Controllers\Api\GamesController;
use App\Http\Controllers\Api\GenresController;
use App\Http\Controllers\Api\PlatformsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('games', [GamesController::class, 'index']);
Route::get('games/{id}', [GamesController::class, 'show']);
Route::get('genres', [GenresController::class, 'index']);
Route::get('platforms', [PlatformsController::class, 'index']);
