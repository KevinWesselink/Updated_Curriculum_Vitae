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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->String('schoolName');
            $table->String('educationName');
            $table->longText('smallExplanation1');
            $table->longText('smallExplanation2')->nullable();
            $table->longText('smallExplanation3')->nullable();
            $table->longText('smallExplanation4')->nullable();
            $table->longText('smallExplanation5')->nullable();
            $table->String('yearsFollowed');
            $table->String('schoolLocation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
