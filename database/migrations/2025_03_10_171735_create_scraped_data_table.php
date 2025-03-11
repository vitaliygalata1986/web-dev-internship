<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('scraped_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('retailer_id')->constrained('retailers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock_count');
            $table->json('images')->nullable();
            $table->float('rating')->nullable();
            $table->float('avg_rating')->nullable();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE scraped_data ADD CONSTRAINT chk_rating CHECK (rating >= 1 AND rating <= 5)");
        DB::statement("ALTER TABLE scraped_data ADD CONSTRAINT chk_avg_rating CHECK (avg_rating >= 1 AND avg_rating <= 5)");
    }

    public function down()
    {
        Schema::dropIfExists('scraped_data');
    }
};
