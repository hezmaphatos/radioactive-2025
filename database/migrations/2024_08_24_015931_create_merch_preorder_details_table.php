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
        Schema::create('merch_preorder_details', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('merch_id');
            $table->integer('quantity');
            $table->string('variation')->nullable();
            $table->bigInteger('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merch_preorder_details');
    }
};
