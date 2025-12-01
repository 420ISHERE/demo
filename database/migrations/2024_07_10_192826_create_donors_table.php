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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
             $table->string('seva_type',255)->default("annadaan");
             $table->string('amount',255)->nullable();
             $table->string('payment_id',255)->nullable();
             $table->string('order_id',255)->nullable();
             $table->string('name',255)->nullable();
             $table->string('mobile',255)->nullable();
             $table->string('email',255)->nullable();
             $table->string('pan_number',255)->nullable();
             $table->string('address_one',255)->nullable();
             $table->string('address_two',255)->nullable();
             $table->string('address_three',255)->nullable();
             $table->string('address_four',255)->nullable();
             $table->string('pin_code',255)->nullable();
             $table->string('city',255)->nullable();
             $table->string('state',255)->nullable();
             $table->string('status',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
