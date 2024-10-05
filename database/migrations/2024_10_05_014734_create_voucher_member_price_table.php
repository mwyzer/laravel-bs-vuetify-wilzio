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
        Schema::create('voucher_member_price', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voucher_profile_id'); // Foreign key to voucher profile
            $table->unsignedBigInteger('member_level_id'); // Foreign key to member level
            $table->integer('price_points'); // Price points for the member level
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('voucher_profile_id')->references('id')->on('voucher_profiles')->onDelete('cascade');
            $table->foreign('member_level_id')->references('id')->on('member_levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_member_price');
    }
};
