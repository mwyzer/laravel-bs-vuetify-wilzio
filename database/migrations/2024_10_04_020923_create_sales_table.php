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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transactionId'); // Foreign key to transactions table
            $table->unsignedBigInteger('customerId'); // Foreign key to customers table
            $table->unsignedBigInteger('location_id'); // Foreign key to locations table
            $table->decimal('profit', 10, 2); // Profit amount
            $table->date('date'); // Sale date
            $table->enum('type', ['daily', 'monthly']); // Type of sale (daily or monthly)
            $table->integer('voucher_count'); // Number of vouchers sold
            $table->decimal('income', 15, 2); // Income generated
            $table->timestamp('logDate')->nullable(); // Log date
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('transactionId')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('customerId')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
