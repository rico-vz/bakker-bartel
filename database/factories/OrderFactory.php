<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'order_id' => $this->faker->randomNumber(5),
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->randomNumber(8),
            'order' => $this->faker->randomElement([
                'Baguette',
                'Ciabatta',
                'Croissant',
                'Focaccia',
                'Brioche',
                'Pain au chocolat',
                'Pain au raisin',
                'Sourdough',
                'Rye bread',
                'Pumpernickel',
                'Baguette tradition',
                'Walnut bread',
                'Pecan bread',
                'Banana bread',
                'Chocolate cake',
                'Cheesecake',
                'Carrot cake',
                'Apple pie',
                'Pecan pie',
                'Lemon meringue pie'
            ]),
            'price' => $this->faker->randomNumber(3),
            'date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['in behandeling', 'verwerking', 'voltooid', 'geannuleerd']),
        ];
    }
}