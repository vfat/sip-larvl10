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
        Schema::create('pbus', function (Blueprint $table) {
            $table->id();
            $table->string('umur')->nullable();
            $table->string('min_3_sd')->nullable();
            $table->string('min_2_sd')->nullable();
            $table->string('min_1_sd')->nullable();
            $table->string('median')->nullable();
            $table->string('plus_1_sd')->nullable();
            $table->string('plus_2_sd')->nullable();
            $table->string('plus_3_sd')->nullable();
            $table->string('jk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pbus');
    }
};
