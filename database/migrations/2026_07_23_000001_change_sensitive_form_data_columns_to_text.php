<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('form_drafts', function (Blueprint $table) {
            $table->longText('form_data')->change();
        });

        Schema::table('submitted_form_data', function (Blueprint $table) {
            $table->longText('form_data')->change();
        });
    }

    public function down(): void
    {
        Schema::table('form_drafts', function (Blueprint $table) {
            $table->json('form_data')->change();
        });

        Schema::table('submitted_form_data', function (Blueprint $table) {
            $table->json('form_data')->change();
        });
    }
};
