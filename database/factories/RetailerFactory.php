<?php

namespace Database\Factories;

use App\Models\Retailer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class RetailerFactory extends Factory
{
    protected $model = Retailer::class;

    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'url' => $this->faker->url,
            'currency' => Arr::random(['USD', 'EUR', 'GBP']),
            'logo' => $this->faker->imageUrl(100, 100, 'business'),
        ];
    }
}
