<?php

namespace Database\Factories;

use App\Models\Artiste;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projet>
 */
class ProjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artiste_id'=>Artiste::factory(),
            'start_vote'=>$this->faker->dateTimeThisDecade(),
            'end_vote'=>$this->faker->dateTimeThisDecade(),
            'description'=>$this->faker->paragraph()
        ];
    }
}
