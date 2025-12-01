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
        Schema::create('monkdata', function (Blueprint $table) {
            $table->id();
             $table->string('full_name',255)->nullable();
             $table->string('mobile',255)->nullable();
             $table->string('email',255)->nullable();
             $table->string('birth_date',255)->nullable();
             $table->string('qualification',255)->nullable();
             $table->string('occupation',255)->nullable();
             $table->string('img_url',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monkdata');
    }
};
