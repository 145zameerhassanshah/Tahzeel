<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('element_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('element_id')->constrained('elements')->onDelete('cascade');
            $table->json('title');         // dual-language support
            $table->json('description')->nullable(); // dual-language support
            $table->integer('order_no')->default(0); // optional sorting/order
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('element_features');
    }
};