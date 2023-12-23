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
            $table->string('nik')->nullable();
            $table->string('nama');
            $table->enum('jk', ['L', 'P', 'U'])->nullable()->default('U');
            $table->string('tgl_lahir')->nullable();
            $table->string('bb_lahir')->nullable();
            $table->string('tb_lahir')->nullable();            
            $table->string('nama_ortu')->nullable();
            $table->string('prov')->nullable();
            $table->string('kab_kota')->nullable();
            $table->string('kec')->nullable();
            $table->string('pukesmas')->nullable();
            $table->string('desa_kel')->nullable();
            $table->string('posyandu')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('alamat')->nullable();
            $table->string('usia_saat_ukur')->nullable();
            $table->string('tanggal_pengukuran')->nullable();
            $table->string('berat')->nullable(); 
            $table->string('tinggi')->nullable(); 
            $table->string('lila')->nullable(); 
            $table->string('bb_u')->nullable();
            $table->string('zs_bb_u')->nullable(); 
            $table->string('tb_u')->nullable();
            $table->string('zs_tb_u')->nullable(); 
            $table->string('bb_tb')->nullable();
            $table->string('zs_bb_tb')->nullable(); 
            $table->string('naik_berat_badan')->nullable();
            $table->string('pmt_diterima_kg')->nullable();
            $table->string('jml_vit_a')->nullable();
            $table->string('kpsp')->nullable();
            $table->string('kia')->nullable();
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
