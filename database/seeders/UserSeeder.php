<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'test',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('test123'),
        ]);
    }
}
