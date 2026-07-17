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
        Schema::create('form_drafts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->json('form_data');       // Form data as JSON
            $table->integer('max_step');
            $table->integer('current_step');
            $table->timestamp('expires_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_drafts');
    }
};
