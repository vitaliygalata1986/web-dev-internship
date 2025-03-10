<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->text,
            'manufacturer_part_number' => $this->faker->unique()->numerify('MPN####'),
            'pack_size' => $this->faker->word,
            'images' => json_encode([$this->faker->imageUrl()]),
        ];
    }
}
