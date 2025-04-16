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

        $games = $videogames = [
            [
                "title" => "The Legend of Zelda: Breath of the Wild",
                "cover_url" => "covers/PJszKRQD17ULKkiOXxIOUryA8FltMh1IxYlxL2ff.jpg",
                "genre" => "Action-Adventure",
                "platform" => "Nintendo Switch",
                "developer" => "Nintendo EPD",
                "publisher" => "Nintendo",
                "release_date" => "2017-03-03",
                "rating" => 9.7,
                "price" => 59.99,
                "game_mode" => "Single-player",
                "description" => "Un'avventura open-world attraverso il vasto regno di Hyrule."
            ],
            [
                "title" => "Elden Ring",
                "cover_url" => "covers/PKjYQP7tOTopYY9VjiyYM7rCJcnmcu5bCa3zDP2G.jpg",
                "genre" => "Action RPG",
                "platform" => "PC",
                "developer" => "FromSoftware",
                "publisher" => "Bandai Namco",
                "release_date" => "2022-02-25",
                "rating" => 9.5,
                "price" => 49.99,
                "game_mode" => "Single-player / Multiplayer",
                "description" => "Esplora un mondo fantasy oscuro e affronta boss mortali."
            ],
            [
                "title" => "Minecraft",
                "cover_url" => "covers/IgVWTbhmfWNFZ6lgQMqFopM1KRH4FpYum61EOPw8.jpg",
                "genre" => "Sandbox",
                "platform" => "Multi-platform",
                "developer" => "Mojang Studios",
                "publisher" => "Microsoft",
                "release_date" => "2011-11-18",
                "rating" => 9.0,
                "price" => 26.95,
                "game_mode" => "Single-player / Multiplayer / Co-op",
                "description" => "Costruisci, esplora e sopravvivi in un mondo sandbox a blocchi."
            ],
            [
                "title" => "God of War Ragnarök",
                "cover_url" => "covers/EQmpIPdgpyYgDLE6KalV5vgjBfAkjQ9Kgjub9c3c.jpg",
                "genre" => "Action",
                "platform" => "PS5",
                "developer" => "Santa Monica Studio",
                "publisher" => "Sony Interactive Entertainment",
                "release_date" => "2022-11-09",
                "rating" => 9.6,
                "price" => 69.99,
                "game_mode" => "Single-player",
                "description" => "Kratos e Atreus affrontano dèi e mostri mentre si avvicina il Ragnarök."
            ],
            [
                "title" => "Grand Theft Auto V",
                "cover_url" => "covers/Xz3TSSFSS8PfI4rlzoc4o60NWnrVMpJAVu9NEZJy.jpg",
                "genre" => "Action-Adventure",
                "platform" => "Multi-platform",
                "developer" => "Rockstar North",
                "publisher" => "Rockstar Games",
                "release_date" => "2013-09-17",
                "rating" => 9.4,
                "price" => 29.99,
                "game_mode" => "Single-player / Multiplayer",
                "description" => "Un mondo aperto pieno di crimini ambientato nella città fittizia di Los Santos."
            ],
            [
                "title" => "Red Dead Redemption 2",
                "cover_url" => "covers/LMCeom1jm3TEa7wuFgRvf5qFcMdvlFooGHWGiH1e.jpg",
                "genre" => "Action-Adventure",
                "platform" => "Multi-platform",
                "developer" => "Rockstar Studios",
                "publisher" => "Rockstar Games",
                "release_date" => "2018-10-26",
                "rating" => 9.8,
                "price" => 39.99,
                "game_mode" => "Single-player / Multiplayer",
                "description" => "Vivi la vita di un fuorilegge negli ultimi giorni del selvaggio West."
            ],
            [
                "title" => "The Witcher 3: Wild Hunt",
                "cover_url" => "covers/efhgq2eqno0aceA2DTr9cgkjYqTuR6ImMTcfB25q.jpg",
                "genre" => "RPG",
                "platform" => "Multi-platform",
                "developer" => "CD Projekt Red",
                "publisher" => "CD Projekt",
                "release_date" => "2015-05-19",
                "rating" => 9.5,
                "price" => 19.99,
                "game_mode" => "Single-player",
                "description" => "Interpreta Geralt e caccia mostri in un ricco mondo fantasy immersivo."
            ],
            [
                "title" => "Cyberpunk 2077",
                "cover_url" => "covers/VxKDX0idWz6S9hQWCN4DIR6Dhn8XvbF64bnsdJR1.jpg",
                "genre" => "RPG",
                "platform" => "PC",
                "developer" => "CD Projekt Red",
                "publisher" => "CD Projekt",
                "release_date" => "2020-12-10",
                "rating" => 7.8,
                "price" => 29.99,
                "game_mode" => "Single-player",
                "description" => "Un RPG open-world ambientato in una città futuristica e distopica."
            ],
            [
                "title" => "Hades",
                "cover_url" => "covers/AkuQlfwFjBtzkPECcMYEcWXfQGvT6WR6K0U9nWQC.jpg",
                "genre" => "Roguelike",
                "platform" => "Multi-platform",
                "developer" => "Supergiant Games",
                "publisher" => "Supergiant Games",
                "release_date" => "2020-09-17",
                "rating" => 9.0,
                "price" => 24.99,
                "game_mode" => "Single-player",
                "description" => "Combatti attraverso l'Oltretomba in un'avventura roguelike frenetica."
            ],
            [
                "title" => "Stardew Valley",
                "cover_url" => "covers/r23g4NARG8NJPmmE7rgwSOWmapOMXZSP66OyIhbG.jpg",
                "genre" => "Simulation",
                "platform" => "Multi-platform",
                "developer" => "ConcernedApe",
                "publisher" => "ConcernedApe",
                "release_date" => "2016-02-26",
                "rating" => 8.9,
                "price" => 14.99,
                "game_mode" => "Single-player / Co-op",
                "description" => "Un simulatore agricolo con elementi RPG e un'atmosfera rilassante."
            ],
            [
                "title" => "Marvel's Spider-Man 2",
                "cover_url" => "covers/pwImoHjA1aDaonAJ64Bq06awq6LKNFJC1E7M0xKA.jpg",
                "genre" => "Action-Adventure",
                "platform" => "PS5",
                "developer" => "Insomniac Games",
                "publisher" => "Sony Interactive Entertainment",
                "release_date" => "2023-10-20",
                "rating" => 9.2,
                "price" => 69.99,
                "game_mode" => "Single-player",
                "description" => "Sfreccia tra i grattacieli di New York come Peter Parker e Miles Morales in un'entusiasmante avventura supereroistica."
            ]
        ];



        foreach ($games as $game) {

            $newGame = new Game();

            $newGame->title = $game["title"];
            $newGame->cover_url = $game["cover_url"];
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
