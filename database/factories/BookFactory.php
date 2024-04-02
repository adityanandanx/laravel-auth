<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'published_year' => $this->faker->year(),
            'price' => $this->faker->randomFloat(2, 0, 500),
            'genre' => $this->faker->randomElement(['romance', 'thriller', 'scifi', 'action', 'comedy', 'horror']),
        ];
    }
}
