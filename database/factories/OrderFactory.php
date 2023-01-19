<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'total_price' => fake()->randomDigitNotNull * 15,
            'pickup_date' => fake()->date,
            'status' => fake()->randomElement(['in behandeling', 'klaar om op te halen', 'afgehandeld', 'geannuleerd']),
        ];
    }
}
