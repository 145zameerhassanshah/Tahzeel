<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->constrained('service_categories', 'id');
            $table->json('name'); // Change to JSON
            $table->string('slug');
            $table->string('icon');
            $table->string('order_no');
            $table->enum('status', ['publish', 'draft']);
            $table->json('banner_title'); // Change to JSON
            $table->json('banner_subtitle'); // Change to JSON
            $table->string('banner_image');
            $table->json('description'); // Change to JSON
            $table->json('other_description')->nullable(); // Change to JSON
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};