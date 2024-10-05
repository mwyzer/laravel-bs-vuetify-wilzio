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
        Schema::create('voucher_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voucher_type_id'); // Foreign key to voucher types (if applicable)
            $table->string('name', 255); // Voucher name
            $table->integer('duration'); // Voucher duration
            $table->string('status', 255); // Status (e.g., Active, Inactive)
            $table->integer('import')->nullable(); // Optional: Import details
            $table->integer('stock')->default(0); // Available stock
            $table->integer('sold_today')->default(0); // Vouchers sold today
            $table->integer('sold_this_month')->default(0); // Vouchers sold this month
            $table->integer('sold_total')->default(0); // Total vouchers sold
            $table->string('remaining_time', 255)->nullable(); // Remaining time for voucher
            $table->integer('warning_stock_low')->default(0); // Stock low warning level
            $table->integer('warning_stock_critical')->default(0); // Critical stock warning level
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('voucher_type_id')->references('id')->on('voucher_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_profile');
    }
};
