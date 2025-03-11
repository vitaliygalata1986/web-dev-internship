<?php

namespace Database\Seeders;

use App\Models\ScrapedData;
use App\Models\Product;
use App\Models\Retailer;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ScrapedDataSeeder extends Seeder
{
    public function run(): void
    {
        ScrapedData::factory(100)->create()->each(function ($scrapedData) {
            $scrapedData->created_at = Carbon::now()->subDays(rand(0, 365));
            $scrapedData->save();
        });
    }
}
