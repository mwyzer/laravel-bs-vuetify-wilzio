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
        Schema::create('deposit_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customerId'); // Foreign key to customers table
            $table->decimal('amount', 10, 2); // Deposit amount
            $table->timestamp('logDate')->nullable(); // Log date
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('customerId')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposit_history');
    }
};
