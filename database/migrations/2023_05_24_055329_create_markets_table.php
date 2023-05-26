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
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consignee_id');
            $table->unsignedBigInteger('market_category_id');
            $table->string('name');
            $table->text('address');
            $table->string('phone_number');
            $table->text('image_url');
            $table->timestamps();

            $table->foreign('consignee_id')->references('id')->on('consignees');
            $table->foreign('market_category_id')->references('id')->on('market_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markets');
    }
};
