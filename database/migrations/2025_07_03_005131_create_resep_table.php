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
        Schema::create('resep', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pasien_id')->constrained('users')->onDelete('cascade');
    $table->text('deskripsi');
    $table->enum('status', ['menunggu', 'diproses', 'selesai'])->default('menunggu');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep');
    }
};
