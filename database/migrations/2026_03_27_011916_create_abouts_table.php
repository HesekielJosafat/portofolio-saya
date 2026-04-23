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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            // Info Hero & Sidebar
            $table->string('name');
            $table->string('hero_titles'); 
            $table->string('profile_image')->nullable();
            $table->string('hero_image')->nullable(); // Ini untuk banner
            
            // Info Detail About
            $table->string('about_title'); 
            $table->text('about_description');
            $table->date('birthday')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->integer('age')->nullable();
            $table->string('degree')->nullable();
            $table->string('email')->nullable();
            $table->string('freelance_status')->nullable();
            
            // Info Social Media (Opsional)
            $table->string('twitter_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
