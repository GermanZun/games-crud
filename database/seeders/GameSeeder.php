<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::Create([
            'id' => 1,
            'name' => 'BAMBOO RUSH',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'description' => 'Descripción de BAMBOO RUSH',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'status_id' => 1
        ]);

        Game::Create([
            'id' => 2,
            'name' => 'REELS OF WEALTH',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
            'description' => 'Descripción de REELS OF WEALTH',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
            'status_id' => 1
        ]);

        Game::Create([
            'id' => 3,
            'name' => 'DRAGON & PHOENIX',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
            'description' => 'Descripción de DRAGON & PHOENIX',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
            'status_id' => 1
        ]);

        Game::Create([
            'id' => 4,
            'name' => 'TAKE THE BANK',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
            'description' => 'Descripción de TAKE THE BANK',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
            'status_id' => 1
        ]);

        Game::Create([
            'id' => 5,
            'name' => 'CAISHEN’S ARRIVAL',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
            'description' => 'Descripción de CAISHEN’S ARRIVAL',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
            'status_id' => 1
        ]);

        Game::Create([
            'id' => 6,
            'name' => 'GEMMED!',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
            'description' => 'Descripción de GEMMED!',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
            'status_id' => 1
        ]);

    }
}
