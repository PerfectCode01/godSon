<?php

namespace Database\Seeders;

use App\Models\Son;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Son::factory()->count(10)->hasVotes(10);
    }
}
