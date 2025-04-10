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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('judul');
            $table->text('isi_laporan');
            $table->string('nama_pelaku');
            $table->string('kelas_pelaku');
            $table->string('jurusan_pelaku');
            $table->boolean('anonim')->default(true);
            $table->string('nama_pelapor')->nullable();
            $table->string('kelas_pelapor')->nullable();
            $table->string('jurusan_pelapor')->nullable();
            $table->enum('peran', ['saksi', 'korban']);
            $table->enum('status', ['pending', 'ditangani'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
