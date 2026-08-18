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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('industry_partners_id')->constrained('industry_partners')->references('id');
            $table->string('title');
            $table->enum('type', ['pkl', 'lowongan-kerja']);
            $table->string('requirements');
            $table->date('deadline');
            $table->enum('status', ['active', 'closed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
