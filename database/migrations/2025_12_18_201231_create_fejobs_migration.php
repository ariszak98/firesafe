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
        Schema::create('fejobs_migration', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('contact_information')->nullable();
            $table->string('fe6')->nullable();
            $table->string('fe12')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fejobs_migration');
    }
};
