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
        Schema::create('volunteerdata', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',255)->nullable();
            $table->string('mobile',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('alternate_number',255)->nullable();
            $table->string('birth_date',255)->nullable();
            $table->string('gender',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('qualification',255)->nullable();
            $table->string('Occupation',255)->nullable();
            $table->string('skills',255)->nullable();
            $table->string('languages',255)->nullable();
            $table->string('volunteerType',255)->nullable();
            $table->string('volunteer_duration',255)->nullable();
            $table->string('contribution_hours',255)->nullable();
            $table->string('programs',255)->nullable();
            $table->string('chanting-rounds',255)->nullable();
            $table->string('socialmedia',255)->nullable();
            $table->string('message',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteerdata');
    }
};
