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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id'); // Foreign key to locations table
            $table->string('number'); // Nomor (e.g., 0811-5409-864)
            $table->string('type'); // Provider (e.g., Pascabayar, Metro)
            $table->boolean('available')->default(true); // Availability of service
            $table->string('supplier'); // Penyedia (e.g., Kartu Halo, Telkom)
            $table->string('location'); // Lokasi (e.g., JABRIEL, GUDANG)
            $table->boolean('lb')->default(false); // LB (e.g., true or false for "Iya" or "Tidak")
            $table->string('position'); // Posisi (e.g., ISP-01, ISP-02)
            $table->string('owner'); // Pemegang (e.g., Idam, Nataniel, Surang)
            $table->enum('status', ['Terpasang', 'Stand By', 'Bermasalah']); // Status (e.g., Terpasang, Stand By, Bermasalah)
            $table->timestamps(); // created_at and updated_at columns

            // Foreign key constraint
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
