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
        Schema::create('member_cashes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cash_fund_information_id')->constrained()->onDelete('cascade');
            $table->string('member_name'); // Optional: Add member name field
            $table->boolean('week_1_status')->default(false);
            $table->boolean('week_2_status')->default(false);
            $table->boolean('week_3_status')->default(false);
            $table->boolean('week_4_status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_cashes');
    }
};
