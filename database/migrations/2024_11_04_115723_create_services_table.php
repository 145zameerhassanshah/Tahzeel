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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->constrained('id')->on('service_categories');
            $table->string('name');
            $table->string('slug');
            $table->string('icon');
            $table->string('order_no');
            $table->enum('status', ['publish', 'draft']);
            $table->string('banner_title');
            $table->string('banner_subtitle');
            $table->string('banner_image');
            $table->string('description');
            $table->string('other_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
