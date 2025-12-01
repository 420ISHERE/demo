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
        Schema::create('gita', function (Blueprint $table) {
            $table->id();
             $table->string('customer_id',255)->nullable();
             $table->string('payment_id',255)->nullable();
              $table->string('order_id',255)->nullable();
             $table->string('amount',255)->nullable();
             $table->string('payment_status',255)->nullable();
             $table->string('full_name',255)->nullable();
             $table->string('mobile',255)->nullable();
             $table->string('email',255)->nullable();
             $table->string('birth_date',255)->nullable();
             $table->string('address_line_one',255)->nullable();
             $table->string('address_line_two',255)->nullable();
             $table->string('city',255)->nullable();
             $table->string('state',255)->nullable();
             $table->string('postal_code',255)->nullable();
             $table->string('occupation',255)->nullable();
             $table->string('college_company',255)->nullable();
             $table->string('awared_by',255)->nullable();
           
            
            
             
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gita');
    }
};
