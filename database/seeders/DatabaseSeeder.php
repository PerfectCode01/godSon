<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProjetSeeder;
use Database\Seeders\ArtisteSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ArtisteSeeder::class,
            DonSeeder::class,
            ProjetSeeder::class,
            SonSeeder::class,
            UserSeeder::class,
            VoteSeeder::class
        ]);
    }
}
