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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customerTitle', 255)->nullable();
            $table->string('customerName', 255)->nullable();
            $table->string('customerLocation', 255)->nullable();
            $table->string('customerOccupation', 255)->nullable();
            $table->string('customerPosition', 255)->nullable();
            $table->string('customerIsFirstMethod')->default(0);
            $table->text('customerPhoto')->nullable();
            $table->unsignedBigInteger('membershipLevelId');
            $table->timestamps();
            $table->softDeletes();

            // Foreign Key Constraints
            $table->foreign('membershipLevelId')->references('id')->on('membership_levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
