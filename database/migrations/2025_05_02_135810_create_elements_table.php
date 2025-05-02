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
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->string('element_name'); // required

            // Dual-language fields using JSON
            $table->json('title');         // required in at least one language, validate in form
            $table->json('subtitle')->nullable();
            $table->json('description')->nullable();

            $table->string('image')->nullable();
            $table->string('icon')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};
