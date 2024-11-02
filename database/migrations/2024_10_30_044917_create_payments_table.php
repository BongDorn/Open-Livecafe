<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{



    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index(); // Reference to the user making the payment
            $table->string('payment_method')->default('paypal'); // e.g., PayPal, Stripe
            $table->string('transaction_id')->unique(); // Unique transaction ID
            $table->decimal('amount', 10, 2); // Payment amount
            $table->string('currency', 3)->default('USD'); // Currency code
            $table->string('status')->default('pending'); // e.g., pending, completed, failed
            $table->timestamp('payment_date')->nullable(); // Payment date
            $table->timestamps();

            // Optional foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }

};
