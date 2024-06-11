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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // naam bedrijf, functie student, id student, begin stage, eind stage, eindbeoordeling, small explanation min 5
            $table->String('companyName');
            $table->String('companyLocation');
            $table->String('functionName');
            $table->String('internshipStartedAt');
            $table->String('internshipEndedAt');
            $table->String('finalAssessment');
            $table->longText('smallExplanation1');
            $table->longText('smallExplanation2')->nullable();
            $table->longText('smallExplanation3')->nullable();
            $table->longText('smallExplanation4')->nullable();
            $table->longText('smallExplanation5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
