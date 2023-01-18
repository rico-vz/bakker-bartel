<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\assortment>
 */
class AssortmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => $this->faker->word,
            'product_name' => $this->faker->word,
            'price' => $this->faker->randomDigitNotNull * 10,
            'description' => $this->faker->word,
            'image' => 'https://cataas.com/cat?width=500&height=300',
        ];
    }
}