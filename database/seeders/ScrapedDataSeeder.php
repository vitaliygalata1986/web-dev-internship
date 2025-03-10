<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ScrapedData;
use Illuminate\Database\Seeder;

class ScrapedDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScrapedData::factory()->count(100)->create([
            'created_at' => function () {
                return Carbon::now()->subDays(rand(0, 365));
            }
        ]);
    }
}
