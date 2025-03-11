<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description');
            $table->string('manufacturer_part_number', 255)->unique();
            $table->string('pack_size', 50);
            $table->json('images')->nullable(); // JSON для списку зображень
            $table->timestamps(); // Додаємо created_at і updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
