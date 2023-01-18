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
        $p_name = $this->faker->word;
        return [
            'category' => $this->faker->word,
            'product_name' => $p_name,
            'price' => $this->faker->randomDigitNotNull * 10,
            'description' => $this->faker->word,
            'image' => "https://via.placeholder.com/400x250.png?text=$p_name",
        ];
    }
}