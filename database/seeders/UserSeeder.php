<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'fauzi',
            'email' => 'seringcoding@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 1
        ]);
    }
}
