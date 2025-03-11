<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->json('images')->nullable(); // JSON для списку зображень
            $table->decimal('rating', 2, 1)->nullable()->check('rating >= 1 AND rating <= 5');
            $table->decimal('avg_rating', 2, 1)->nullable()->check('avg_rating >= 1 AND avg_rating <= 5');
            $table->timestamps(); // Додаємо created_at і updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('scraped_data');
    }
};
