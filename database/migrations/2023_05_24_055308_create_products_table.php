<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consignor_id');
            $table->unsignedBigInteger('product_category_id');
            $table->string('title');
            $table->text('image_url');
            $table->text('description');
            $table->unsignedDouble('price');
            $table->timestamps();

            $table->foreign('consignor_id')->references('id')->on('consignors');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
