<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\series>
 */
class SeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->words(3, true),
            "seasons" => fake()->randomDigit(),
            "episodes" => fake()->numberBetween(6, 60),
            "release_date" => fake()->dateTimeBetween("-5 years", "-2 years"),
        ];
    }
}
