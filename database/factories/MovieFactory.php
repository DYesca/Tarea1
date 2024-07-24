<?php

namespace Database\Factories;

use App\Models\Studio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3, true),
            'publication_year' => fake()->numberBetween(1900, date('Y')),
            'studio_id' => fake()->numberBetween(1, Studio::count()),
        ];
    }
}
