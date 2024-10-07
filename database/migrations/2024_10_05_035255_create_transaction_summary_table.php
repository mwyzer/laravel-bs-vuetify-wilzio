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
        Schema::create('transaction_summary', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id'); // Foreign key to locations table
            $table->string('period'); // For example, 'April 2023' or '21 April 2023'
            $table->integer('total_vouchers'); // Total number of vouchers sold
            $table->decimal('total_income', 15, 2); // Total income generated
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_summary');
    }
};
