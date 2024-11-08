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
        Schema::create('tahseel_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('id')->on('services');
            $table->string('name');
            $table->string('icon');
            $table->integer('order_no');
            $table->enum('status', ['publish', 'draft']);
            $table->string('banner_title');
            $table->string('banner_subtitle');
            $table->string('banner_image');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahseel_services');
    }
};
