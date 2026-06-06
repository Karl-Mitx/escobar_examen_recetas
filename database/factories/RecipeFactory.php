<?php

namespace Database\Factories;

use App\Models\Chef;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(fake()->numberBetween(3, 5), true),
            'category' => fake()->randomElement(['Entrada', 'Plato fuerte', 'Postre', 'Bebida', 'Sopa']),
            'preparation_time' => fake()->numberBetween(10, 120),
            'chef_id' => Chef::factory(),
        ];
    }
}
