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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('job_title'); // Contoh: "Senior Graphic Design Specialist"
            $table->string('year_range'); // Contoh: "2019 - Present"
            $table->string('company'); // Contoh: "Experion, New York"
            $table->text('description'); // Disimpan dalam bentuk teks atau HTML
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
