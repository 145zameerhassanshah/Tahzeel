<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('description')->nullable();
            $table->json('hero_title')->nullable();
            $table->json('hero_sub_title')->nullable();
            $table->json('hero_description')->nullable();
            $table->string('slug')->unique();
            $table->string('hero_image')->nullable();
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->enum('type',['amer-service','tasheel-service','vat-service','notary-service','bank-service','hr','dcs','visa','ded-service','investment-plan','real-estate-service','pro-service','legal-service','dha-service','typing-attestation-service']);
            $table->string('route_name')->nullable();
            $table->enum('page_link_for', ['header', 'footer', 'services', 'none']);
            $table->integer('order_no')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['type']);
            $table->index(['status']);
            $table->index(['route_name']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};