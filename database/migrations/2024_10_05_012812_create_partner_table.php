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
        Schema::create('partner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id'); // Foreign key to locations table
            $table->string('name'); // Mitra Wilzio (Saller, Partner)
            $table->boolean('status')->default(true); // Status (e.g., Aktif)
            $table->integer('max_quantity'); // Maks-Jumlah
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner');
    }
};
