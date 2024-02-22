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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable;
            $table->string('content')->nullable;
            $table->string('name')->nullable;
            $table->string('birthday')->nullable;
            $table->string('degree')->nullable;
            $table->string('experience')->nullable;
            $table->string('phone')->nullable;
            $table->string('email')->nullable;
            $table->string('address')->nullable;
            $table->string('freelance')->nullable;
            $table->string('image')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
