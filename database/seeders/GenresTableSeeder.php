<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            "Action",
            "Adventure",
            "Action-Adventure",
            "RPG",
            "Shooter",
            "Fighting",
            "Platformer",
            "Survival / Horror",
            "Puzzle",
            "Simulation",
            "Strategy",
            "Sports",
            "Racing",
            "Sandbox",
            "Battle Royale",
            "Multiplayer Online"
        ];

        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->name = $genre;

            $newGenre->save();
        };
    }
}
