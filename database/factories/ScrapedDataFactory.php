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
        $product = Product::query()->inRandomOrder()->first() ?? Product::factory()->create();
        $retailer = Retailer::query()->inRandomOrder()->first() ?? Retailer::factory()->create();

        $rating = $this->faker->randomFloat(1, 1, 5);

        return [
            'product_id' => $product->id,
            'retailer_id' => $retailer->id,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 5, 500),
            'stock_count' => $this->faker->numberBetween(0, 100),
            'images' => [$this->faker->imageUrl()],
            'rating' => $rating,
            'avg_rating' => round(($rating + $this->faker->randomFloat(1, 1, 5)) / 2, 1),
        ];
    }
}
