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
        Schema::create('ppdb_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique();
            $table->foreignId('major_id')->constrained('majors')->references('id');
            $table->enum('zone', ['zonasi','afirmasi','prestasi']);
            $table->enum('school', ['smk','sma']);
            $table->string('full_name');
            $table->integer('nisn')->unique();
            $table->date('date_of_birth');
            $table->string('previous_school');
            $table->enum('status', ['menunggu', 'diterima', 'ditolak']);
            $table->string('document_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb_registrations');
    }
};
