<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Opik Taofik',
            'email' => 'opik@gmail.com',
            'password' => bcrypt('rahasia123'),
            'foto' => 'user.png',
            'level' => 1,
        ]);

        User::create([
            'name' => 'Fina Tri Handayani',
            'email' => 'fina@gmail.com',
            'password' => bcrypt('rahasia123'),
            'foto' => 'user.png',
            'level' => 2,
        ]);
    }
}
