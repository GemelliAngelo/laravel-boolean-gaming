<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $games = [
            [
                "id" => 1,
                "title" => "The Legend of Zelda: Breath of the Wild",
                "genre" => "Action-Adventure",
                "platform" => "Nintendo Switch",
                "developer" => "Nintendo EPD",
                "publisher" => "Nintendo",
                "release_date" => "2017-03-03",
                "rating" => 9.7,
                "price" => 59.99,
                "game_mode" => "Single-player",
                "description" => "An open-world adventure game in the kingdom of Hyrule.",
            ],
            [
                "id" => 2,
                "title" => "Elden Ring",
                "genre" => "Action RPG",
                "platform" => "PC",
                "developer" => "FromSoftware",
                "publisher" => "Bandai Namco",
                "release_date" => "2022-02-25",
                "rating" => 9.5,
                "price" => 49.99,
                "game_mode" => "Single-player / Multiplayer",
                "description" => "Explore a dark fantasy world and defeat powerful bosses.",
            ],
            [
                "id" => 3,
                "title" => "Minecraft",
                "genre" => "Sandbox",
                "platform" => "Multi-platform",
                "developer" => "Mojang Studios",
                "publisher" => "Microsoft",
                "release_date" => "2011-11-18",
                "rating" => 9.0,
                "price" => 26.95,
                "game_mode" => "Single-player / Multiplayer / Co-op",
                "description" => "Build, explore and survive in a pixelated world of blocks.",
            ],
            [
                "id" => 4,
                "title" => "God of War Ragnarök",
                "genre" => "Action",
                "platform" => "PS5",
                "developer" => "Santa Monica Studio",
                "publisher" => "Sony Interactive Entertainment",
                "release_date" => "2022-11-09",
                "rating" => 9.6,
                "price" => 69.99,
                "game_mode" => "Single-player",
                "description" => "Kratos and Atreus face the Norse apocalypse together.",
            ],
            [
                "id" => 5,
                "title" => "Grand Theft Auto V",
                "genre" => "Action-Adventure",
                "platform" => "Multi-platform",
                "developer" => "Rockstar North",
                "publisher" => "Rockstar Games",
                "release_date" => "2013-09-17",
                "rating" => 9.4,
                "price" => 29.99,
                "game_mode" => "Single-player / Multiplayer",
                "description" => "Crime, chaos, and open-world madness in Los Santos.",
            ],
            [
                "id" => 6,
                "title" => "Red Dead Redemption 2",
                "genre" => "Action-Adventure",
                "platform" => "Multi-platform",
                "developer" => "Rockstar Studios",
                "publisher" => "Rockstar Games",
                "release_date" => "2018-10-26",
                "rating" => 9.8,
                "price" => 39.99,
                "game_mode" => "Single-player / Multiplayer",
                "description" => "An epic tale of life in America’s unforgiving heartland.",
            ],
            [
                "id" => 7,
                "title" => "The Witcher 3: Wild Hunt",
                "genre" => "RPG",
                "platform" => "Multi-platform",
                "developer" => "CD Projekt Red",
                "publisher" => "CD Projekt",
                "release_date" => "2015-05-19",
                "rating" => 9.5,
                "price" => 19.99,
                "game_mode" => "Single-player",
                "description" => "Become Geralt of Rivia and hunt monsters across a vast fantasy world.",
            ],
            [
                "id" => 8,
                "title" => "Cyberpunk 2077",
                "genre" => "RPG",
                "platform" => "PC",
                "developer" => "CD Projekt Red",
                "publisher" => "CD Projekt",
                "release_date" => "2020-12-10",
                "rating" => 7.8,
                "price" => 29.99,
                "game_mode" => "Single-player",
                "description" => "Open-world RPG set in a dystopian future city.",
            ],
            [
                "id" => 9,
                "title" => "Hades",
                "genre" => "Roguelike",
                "platform" => "Multi-platform",
                "developer" => "Supergiant Games",
                "publisher" => "Supergiant Games",
                "release_date" => "2020-09-17",
                "rating" => 9.0,
                "price" => 24.99,
                "game_mode" => "Single-player",
                "description" => "Battle your way out of the Underworld in this fast-paced roguelike.",
            ],
            [
                "id" => 10,
                "title" => "Stardew Valley",
                "genre" => "Simulation",
                "platform" => "Multi-platform",
                "developer" => "ConcernedApe",
                "publisher" => "ConcernedApe",
                "release_date" => "2016-02-26",
                "rating" => 8.9,
                "price" => 14.99,
                "game_mode" => "Single-player / Co-op",
                "description" => "A farming simulator with RPG elements and cozy vibes.",
            ],
        ];


        foreach ($games as $game) {

            $newGame = new Game();

            $newGame->title = $game["title"];
            $newGame->publisher = $game["publisher"];
            $newGame->developer = $game["developer"];
            $newGame->release_date = $game["release_date"];
            $newGame->rating = $game["rating"];
            $newGame->price = $game["price"];
            $newGame->description = $game["description"];

            $newGame->save();
        }
    }
}
