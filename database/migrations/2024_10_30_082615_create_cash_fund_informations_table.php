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
            $table->decimal('cash_detail', 15, 2)->default(0);
            $table->date('date'); 
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
