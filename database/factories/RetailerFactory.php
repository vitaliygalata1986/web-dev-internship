<?php

namespace Database\Factories;

use App\Models\Retailer;
use Illuminate\Database\Eloquent\Factories\Factory;

class RetailerFactory extends Factory
{
    protected $model = Retailer::class;

    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'url' => $this->faker->url,
            'currency' => $this->faker->randomElement(['USD', 'EUR', 'GBP']),
            'logo' => $this->faker->imageUrl(100, 100, 'business'),
        ];
    }
}
