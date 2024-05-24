<?php

namespace Database\Factories;

use App\Models\Son;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Don>
 */
class DonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'son_id'=>Son::factory(),
            'montant'=>$this->faker->numberBetween(100,10000),
            'user_id'=>User::factory()
        ];
    }
}
