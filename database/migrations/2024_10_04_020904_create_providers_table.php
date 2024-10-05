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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id'); // Foreign key to locations table
            $table->string('type'); // Provider Type (e.g., Pascabayar, Prabayar)
            $table->string('supplier'); // Penyedia (e.g., Kartu Halo)
            $table->string('number'); // Nomor (e.g., 0815-2822-1221)
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
        Schema::dropIfExists('providers');
    }
};
