<?php

use App\Http\Controllers\Api\GamesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('games', [GamesController::class, 'index']);
