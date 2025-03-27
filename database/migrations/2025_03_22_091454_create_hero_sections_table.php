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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->onDelete('cascade');
            $table->json('title');                // {"en": "Welcome to Our Website", "ar": "مرحبًا بكم في موقعنا"}
            $table->json('subtitle')->nullable(); // {"en": "We Provide the Best Services", "ar": "نحن نقدم أفضل الخدمات"}
            $table->json('description')->nullable(); // {"en": "Explore our amazing services", "ar": "استكشف خدماتنا الرائعة"}
            $table->json('background_image')->nullable(); // Stores paths to background images, e.g., "image.jpg"
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
