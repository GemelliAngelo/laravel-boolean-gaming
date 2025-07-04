<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {

        $games = Game::with('platforms', 'genre')->get();

        return response()->json(
            [
                'success' => true,
                'data' => $games,
            ]
        );
    }

    public function show($id)
    {
        $game = Game::with('platforms', 'genre')->find($id);

        return response()->json(
            [
                'success' => true,
                'data' => $game,
            ]
        );
    }
}
