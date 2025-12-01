<?php

// database/migrations/create_shradh_bookings_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('shradh_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id')->unique();
            $table->string('donar_name');
            $table->string('mobile_number');
            $table->string('email');
            $table->text('address');
            $table->decimal('amount', 10, 2);
            $table->string('product_name')->default('Online Shradh Poojan in Haridwar - Pitrupaksha 2025');
            $table->string('product_id')->default('shradh_2025');
            $table->text('special_instructions')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payment_gateway')->default('razorpay');
            $table->enum('payment_status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->enum('booking_status', ['confirmed', 'in_progress', 'completed', 'cancelled'])->default('confirmed');
            $table->json('payment_response')->nullable();
            $table->timestamp('ceremony_date')->nullable();
            $table->text('ceremony_notes')->nullable();
            $table->timestamps();

            $table->index(['payment_status', 'booking_status']);
            $table->index('booking_id');
            $table->index('mobile_number');
            $table->index('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shradh_bookings');
    }
};
