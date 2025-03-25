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
        Schema::create('section_titles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->onDelete('cascade');  // Relating to a group
            $table->enum('type', [
                'testimonial',
                'faq',
                'feature',
                'procedure',
                'why_choose_us',
                'document',
                'call_to_action'
            ]);
            $table->json('title');             // {"en": "Our Services", "ar": "خدماتنا"}
            $table->json('subtitle')->nullable();   // {"en": "Why Choose Us", "ar": "لماذا تختارنا"}
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_titles');
    }
};
