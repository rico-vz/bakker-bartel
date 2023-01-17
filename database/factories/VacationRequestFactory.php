<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VacationRequest>
 */
class VacationRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_id' => $this->faker->unique()->numberBetween(1, 10),
            'start_date' => fake()->date,
            'end_date' => fake()->date,
            'reason' => fake()->sentence(10),
            'status' => fake()->randomElement(['in behandeling', 'goedgekeurd', 'afgekeurd']),
        ];
    }
}