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
            $table->json('title');
            $table->string('slug')->unique();
            $table->json('description')->nullable();   // Using text for longer descriptions
            $table->string('hero_image')->nullable();
            $table->json('hero_title')->nullable();
            $table->json('hero_sub_title')->nullable();
            $table->json('hero_description')->nullable();
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->enum('type',['amer-service','visa','ded','real-estate']);
            $table->string('route_name')->nullable();     // Route name for URL routing
            $table->enum('page_link_for', ['header', 'footer', 'services', 'none']);
            $table->integer('order_no')->default(0);
            $table->json('meta_tags')->nullable();      // Ordering in menus
            $table->string('meta_title')->nullable();     // SEO Meta Title
            $table->text('meta_description')->nullable(); // SEO Meta Description
            $table->timestamps();
            $table->softDeletes(); // Adding soft deletes

            $table->index(['type']);
            $table->index(['status']);
            $table->index(['route_name']);
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
