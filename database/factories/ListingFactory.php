<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => fake()->sentence(),
            'image' => 'https://picsum.photos/200',
            'category_id' => fake()->randomElement([1, 2, 3, 4, 5]),
            'price' => fake()->randomFloat(2, 10, 100),
            'description' => fake()->paragraph(),
            'listing_status_id' => fake()->randomElement([1, 2, 3]),
            'is_featured' => fake()->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
