<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Atmin sigma',
            'email' => 'awd@gmail.com',
            'username' => 'awd',
            'password' => Hash::make('awdawd'),
            'role' => 1,
            
        ]);

        User::factory()->create([
            'name' => 'User sigma',
            'email' => 'asd@gmail.com',
            'username' => 'asd',
            'password' => Hash::make('asdasd'),
            'role' => 2,

        ]);
    }
}
