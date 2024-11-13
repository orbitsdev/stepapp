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
        Schema::create('walk_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('walk_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');
            $table->string('title')->nullable();
            $table->integer('sort_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walk_activities');
    }
};
