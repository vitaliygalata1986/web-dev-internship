<?php

namespace Database\Factories;

use App\Models\ScrapedData;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Retailer;

class ScrapedDataFactory extends Factory
{
    protected $model = ScrapedData::class;

    public function definition()
    {
        return [
            'product_id' => Product::query()->inRandomOrder()->value('id') ?? Product::factory()->create()->id,
            'retailer_id' => Retailer::query()->inRandomOrder()->value('id') ?? Retailer::factory()->create()->id,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 5, 500),
            'stock_count' => $this->faker->numberBetween(0, 100),
            'images' => json_encode([$this->faker->imageUrl()]),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'avg_rating' => $this->faker->randomFloat(1, 1, 5),
            'created_at' => now()->subDays(rand(0, 365)),
        ];
    }
}
