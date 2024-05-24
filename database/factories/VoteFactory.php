<?php

namespace Database\Factories;

use App\Models\Son;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "son_id"=>Son::factory(),
            "count"=>$this->faker->numberBetween(1,10)
        ];
    }
}
