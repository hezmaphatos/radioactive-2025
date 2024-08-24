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
        Schema::create('racs', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            
            $table->string('tim1_penyiar1');
            $table->string('tim1_penyiar2');
            $table->string('tim1_operator');
            $table->string('tim1_institusi');
            $table->string('tim1_nims1');
            $table->string('tim1_nims2');
            $table->string('tim1_nimop');
            $table->string('tim1_contact_wa');
            $table->string('tim1_contact_line');

            $table->string('tim2_penyiar1')->nullable();
            $table->string('tim2_penyiar2')->nullable();
            $table->string('tim2_operator')->nullable();
            $table->string('tim2_institusi')->nullable();
            $table->string('tim2_nims1')->nullable();
            $table->string('tim2_nims2')->nullable();
            $table->string('tim2_nimop')->nullable();
            $table->string('tim2_contact_wa')->nullable();
            $table->string('tim2_contact_line')->nullable();

            $table->string('tim3_penyiar1')->nullable();
            $table->string('tim3_penyiar2')->nullable();
            $table->string('tim3_operator')->nullable();
            $table->string('tim3_institusi')->nullable();
            $table->string('tim3_nims1')->nullable();
            $table->string('tim3_nims2')->nullable();
            $table->string('tim3_nimop')->nullable();
            $table->string('tim3_contact_wa')->nullable();
            $table->string('tim3_contact_line')->nullable();

            $table->string('payment_proof');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rac');
    }
};
