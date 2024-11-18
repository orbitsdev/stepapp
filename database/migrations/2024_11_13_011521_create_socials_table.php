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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->morphs('sociable');
            $table->text('facebook')->nullable(); // The social media link
            $table->text('instagram')->nullable(); // The social media link
            $table->text('tiktok')->nullable(); // The social media link
            $table->text('youtube')->nullable(); // The social media link
            $table->text('linkedin')->nullable(); // The social media link
            $table->text('twitter')->nullable(); // The social media link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
