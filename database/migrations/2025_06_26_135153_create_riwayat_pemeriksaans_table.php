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
        Schema::create('riwayat_pemeriksaans', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade');
    $table->foreignId('dokter_id')->constrained('dokters')->onDelete('cascade');
    $table->date('tanggal_periksa');
    $table->string('diagnosa');
    $table->string('tindakan');
    $table->foreignId('obat_id')->nullable()->constrained('obats')->nullOnDelete();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pemeriksaans');
    }
};
