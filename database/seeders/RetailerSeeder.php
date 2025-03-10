<?php

namespace Database\Seeders;

use App\Models\Retailer;
use Illuminate\Database\Seeder;

class RetailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Retailer::factory()->count(10)->create();
    }
}
