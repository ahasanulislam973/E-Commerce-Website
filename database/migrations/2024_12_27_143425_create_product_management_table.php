<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_management', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->references("id")->on("users");
            $table->json('product_id')->nullable();  // Store product IDs as a JSON array
            $table->json('product_price')->nullable();  // Store product prices as a JSON array
            $table->json('quantity')->nullable();  // Store quantities as a JSON array
            $table->json('discount_price')->nullable();  // Store discount prices as a JSON array
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_management');
    }
};
