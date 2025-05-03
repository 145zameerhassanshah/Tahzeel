<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->string('element_name');
            // Dual-language fields using JSON
            $table->json('title');                   // {"en": "Great service!", "ar": "خدمة رائعة!"}
            $table->json('subtitle')->nullable();    // {"en": "Great service!", "ar": "خدمة رائعة!"}
            $table->json('description')->nullable(); // {"en": "Great service!", "ar": "خدمة رائعة!"}
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};