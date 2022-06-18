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
            'name' => 'Muhammed Salama',
            'email' => 'mohamed@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Salama',
            'email' => 'salama@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
