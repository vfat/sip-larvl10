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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nik')->nullable();
            $table->string('ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->string('alamat')->nullable();
            $table->string('anak_ke')->nullable()->default('1');
            $table->enum('kelamin', ['L', 'P', 'U'])->nullable()->default('U');
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O'])->nullable();
            $table->decimal('berat_lahir', $precision = 8, $scale = 2)->nullable()->default(0);
            $table->decimal('tinggi_lahir', $precision = 8, $scale = 2)->nullable()->default(0);
            $table->decimal('berat_terakhir', $precision = 8, $scale = 2)->nullable()->default(0);
            $table->decimal('tinggi_terakhir', $precision = 8, $scale = 2)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balitas');
    }
};
