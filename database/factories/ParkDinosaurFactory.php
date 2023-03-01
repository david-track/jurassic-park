<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParkDinosaur>
 */
class ParkDinosaurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "date_of_birth" => fake()->dateTimeBetween(
                "-33 years",
                "-30 years"
            ),
            "paddock_id" => fake()->numberBetween(1, 5),
            "health_report_id" => fake()->numberBetween(1000, 1000000),
        ];
    }
}
