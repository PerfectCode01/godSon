<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Son>
 */
class SonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre'=>$this->faker->title(),
            'projet_id'=>Projet::factory(),
            'description'=>$this->faker->paragraph(),
            'url'=>null
        ];
    }
}
