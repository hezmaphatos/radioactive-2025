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
        Schema::create('merch_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('line')->nullable();
            $table->text('payment_image');
            $table->bigInteger('cumulative_price');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merch_orders');
    }
};
