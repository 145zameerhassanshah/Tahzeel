<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->onDelete('cascade');  // Relating to a group
            $table->json('icon')->nullable();        // 
            $table->json('title');                   // {"en": "jladflaj <span> ", "ar": "عنوان الميزة"}
            $table->json('subtitle')->nullable();    // {"en": "Feature Subtitle", "ar": "العنوان الفرعي للميزة"}
            $table->json('description')->nullable(); // {"en": "Description about the feature", "ar": "الوصف حول الميزة"}
            $table->integer('order_no')->default(0); // To sort features in a particular order
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature');
    }
}
