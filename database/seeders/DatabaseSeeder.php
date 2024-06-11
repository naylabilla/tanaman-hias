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
            'name' => 'Admin',
            'email' => env('EMAIL'),
            'nomor_hp' => env('NO_HP'),
            'alamat' => env('ALAMAT'),
            'password' => Hash::make(env('PASSWORD')),
            'role' => 'admin',
        ]);
    }
}
