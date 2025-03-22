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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');            // Single language, so we use string
            $table->text('description')->nullable();   // Using text for longer descriptions
            $table->text('meta_tags')->nullable();     // Meta tags as a single text column
            $table->string('banner_image')->nullable();
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->timestamps();
            $table->softDeletes(); // Adding soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
