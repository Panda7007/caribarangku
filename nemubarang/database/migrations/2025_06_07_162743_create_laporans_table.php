<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama', 100);
            $table->string('email');
            $table->string('whatsapp', 20);
            $table->string('jenis_barang');
            $table->string('lokasi', 255);
            $table->date('tanggal_kejadian');
            $table->text('keterangan')->nullable();
            $table->string('status');
            $table->integer('status_laporan')->default(1);
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
