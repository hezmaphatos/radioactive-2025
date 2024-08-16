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
            $table->string('name');
            $table->string('email');
            $table->string('wa');
            $table->string('line');
            $table->unsignedBigInteger('merch_id');
            $table->integer('qty');
            $table->bigInteger('total_price');
            $table->string('size')->default('');
            $table->string('tee')->default('');
            $table->string('image');
            $table->enum('status', ['Unpaid', 'Paid', 'Canceled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
