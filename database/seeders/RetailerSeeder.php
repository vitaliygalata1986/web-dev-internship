<?php

namespace Database\Seeders;

use App\Models\Retailer;
use Illuminate\Database\Seeder;

class RetailerSeeder extends Seeder
{
    public function run(): void
    {
        Retailer::factory(10)->create();
    }
}
