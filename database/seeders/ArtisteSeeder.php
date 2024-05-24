<?php

namespace Database\Seeders;

use App\Models\Artiste;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artiste::factory()->count(10)->hasProjets(5)->create();
    }
}
