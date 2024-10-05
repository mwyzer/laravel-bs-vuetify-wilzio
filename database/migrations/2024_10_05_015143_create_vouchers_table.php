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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voucher_profile_id'); // Foreign key to voucher profiles
            $table->string('code', 255); // Voucher code
            $table->text('comment')->nullable(); // Comment (optional)
            $table->timestamp('import_date')->nullable(); // Import date
            $table->string('status', 255); // Voucher status (e.g., Active, Inactive)
            $table->timestamp('sale_date')->nullable(); // Sale date (when the voucher is sold)
            $table->string('buyer_name', 255)->nullable(); // Buyer name (optional)
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('voucher_profile_id')->references('id')->on('voucher_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher');
    }
};
