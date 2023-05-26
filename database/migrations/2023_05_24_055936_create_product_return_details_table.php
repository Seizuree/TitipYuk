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
        Schema::create('product_return_details', function (Blueprint $table) {
            $table->unsignedBigInteger('consign_id');
            $table->unsignedBigInteger('return_id');
            $table->string('return_subject');
            $table->string('return_additional_info');
            $table->text('image_url');
            
            $table->timestamps();

            $table->foreign('consign_id')->references('id')->on('consign_transactions');
            $table->foreign('return_id')->references('id')->on('product_returns');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_return_details');
    }
};
