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
        Schema::create('kaderinputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balita_id')->constrained();
            $table->string('berat')->nullable(); 
            $table->string('tinggi')->nullable(); 
            $table->enum('vitamin', ['ya', 'tidak'])->nullable()->default('tidak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaderinputs');
    }
};
