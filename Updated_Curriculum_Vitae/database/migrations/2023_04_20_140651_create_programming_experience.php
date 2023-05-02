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
        Schema::create('programming', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->String('languageName');
            $table->String('experienceLevel');
            $table->longText('smallExplanation1');
            $table->longText('smallExplanation2')->nullable();
            $table->longText('smallExplanation3')->nullable();
            $table->longText('smallExplanation4')->nullable();
            $table->longText('smallExplanation5')->nullable();
            $table->String('startedWith');
            $table->String('workedWithUntil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programming');
    }
};
