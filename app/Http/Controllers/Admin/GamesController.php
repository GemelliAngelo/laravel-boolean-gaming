<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();

        return view("games.index", compact("games"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newGame = new Game();

        $newGame->title = $data['title'];
        $newGame->description = $data['description'];
        $newGame->cover_url = $data['cover_url'];
        $newGame->publisher = $data['publisher'];
        $newGame->developer = $data['developer'];
        $newGame->release_date = $data['release_date'];
        $newGame->price = $data['price'];
        $newGame->rating = $data['rating'];

        $newGame->save();

        return redirect()->route('games.show', $newGame);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('games.update', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $data = $request->all();

        $game->title = $data['title'];
        $game->description = $data['description'];
        $game->cover_url = $data['cover_url'];
        $game->publisher = $data['publisher'];
        $game->developer = $data['developer'];
        $game->release_date = $data['release_date'];
        $game->price = $data['price'];
        $game->rating = $data['rating'];

        $game->update();

        return redirect()->route('games.show', $game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route("games.index");
    }
}
