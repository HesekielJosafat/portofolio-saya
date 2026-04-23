<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul karya
            $table->string('category'); // Contoh: "App", "Web", "Design" (Untuk filter)
            $table->string('image_path'); // Tempat menyimpan nama file gambar
            $table->string('project_url')->nullable(); // Link ke hasil karya (jika ada)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
