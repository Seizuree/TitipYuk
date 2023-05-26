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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consignee_id');
            $table->unsignedBigInteger('consignor_id');
            $table->string('payment_method');
            $table->date('payment_date');
            $table->string('payment_status');
            $table->timestamps();

            $table->foreign('consignee_id')->references('id')->on('consignees');
            $table->foreign('consignor_id')->references('id')->on('consignors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
