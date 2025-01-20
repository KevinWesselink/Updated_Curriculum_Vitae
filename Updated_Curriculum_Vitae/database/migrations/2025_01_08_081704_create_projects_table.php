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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projectName');
            $table->string('projectDescription');
            $table->string('projectLink');
            $table->string('projectImage')->nullable();
            $table->date('projectStartDate');
            $table->date('projectEndDate');
            $table->string('projectRole');
            $table->enum('projectType', ['personal', 'group', 'open_source', 'professional']);
            $table->string('projectTechnologies');
            $table->integer('projectTeamSize');
            $table->string('projectClient');
            $table->string('projectLocation');
            $table->enum('projectStatus', ['completed', 'in_progress', 'on_hold', 'not_started', 'abandoned']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
