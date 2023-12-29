<?php

namespace Database\Factories;

use App\Models\Debt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Debt>
 */
class DebtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'value' => fake()->randomFloat(10, 2, 10000),
            'date' => fake()->dateTimeBetween('-2 months', 'today')->format('Y-m-d'),
            'status' => fake()->randomElement(Debt::$status),
            'constant' => fake()->boolean,
        ];
    }
}
