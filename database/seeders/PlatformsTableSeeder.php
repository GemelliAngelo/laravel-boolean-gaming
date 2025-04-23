<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $platforms = [
            [
                'name' => 'PlayStation',
                'color' => '#003087',
            ],
            [
                'name' => 'Xbox',
                'color' => '#107C10',
            ],
            [
                'name' => 'PC',
                'color' => '#5E5E5E',
            ],
            [
                'name' => 'Mobile',
                'color' => '#FFA500',
            ],
            [
                'name' => 'Nintendo Switch',
                'color' => '#E60012',
            ],
        ];

        foreach ($platforms as $platform) {

            $newPlatform = new Platform();

            $newPlatform->name = $platform['name'];
            $newPlatform->color = $platform['color'];

            $newPlatform->save();
        }
    }
}
