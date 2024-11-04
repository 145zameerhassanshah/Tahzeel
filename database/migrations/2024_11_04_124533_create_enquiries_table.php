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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_no');
            $table->string('subject')->nullable();
            $table->text('message');
            $table->enum('status', ['Pending', 'Follow-up', 'Completed'])->default('Pending');
            $table->string('follow_update')->nullable();
            $table->enum('followup_type', ['Call', 'WhatsApp', 'Message', 'Email', 'Info-required', 'Docs-required'])->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
