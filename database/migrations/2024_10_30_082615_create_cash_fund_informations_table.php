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
        Schema::create('cash_fund_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cash_fund_id')->constrained()->onDelete('cascade');
            $table->date('date'); // Store month and year
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_fund_informations');
    }
};
