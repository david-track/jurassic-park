<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dinosaur>
 */
class DinosaurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "dinosaur" => fake()->name(),
            "alias" => fake()->name(),
            "predator_warning" => fake()->boolean(),
            "digestive_system_id" => fake()->numberBetween(1, 3),
        ];
    }
}
