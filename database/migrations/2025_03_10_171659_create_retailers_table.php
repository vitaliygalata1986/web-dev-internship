<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('retailers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('url', 255)->unique();
            $table->string('currency', 10);
            $table->string('logo')->nullable();
            $table->timestamps(); // Додаємо created_at і updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('retailers');
    }
};
