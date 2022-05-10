<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::Create([
            'id' => 1,
            'name' => 'Activo',
            'description' => 'El juego se encuentra activo.',
        ]);

        Status::Create([
            'id' => 2,
            'name' => 'De baja',
            'description' => 'El juego se encuentra dado de baja.',
        ]);
        Status::Create([
            'id' => 3,
            'name' => 'En mantención',
            'description' => 'El juego se encuentra en mantención.',
        ]);
    }
}
