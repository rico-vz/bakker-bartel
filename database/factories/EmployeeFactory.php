<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'date_of_birth' => fake()->date,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
            'employee_since' => fake()->date,
            'function_id' => fake()->numberBetween(1, 10),


        ];
    }
}