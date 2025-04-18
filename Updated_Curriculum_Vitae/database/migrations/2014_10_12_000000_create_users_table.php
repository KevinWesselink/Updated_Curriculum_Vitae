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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->string('firstName');
            $table->string('lastName');
            $table->enum('sex', ['male', 'female', 'preferNotToSay']);
            $table->string('telephoneNumber');
            $table->string('address');
            $table->string('postalCode');
            $table->string('city');
            $table->string('country');
            $table->string('dateOfBirth');
            $table->string('currentProfession');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
