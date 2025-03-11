<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->text,
            'manufacturer_part_number' => $this->faker->unique()->numerify('MPN####'),
            'pack_size' => $this->faker->word,
            'images' => [$this->faker->imageUrl()],
        ];
    }
}
