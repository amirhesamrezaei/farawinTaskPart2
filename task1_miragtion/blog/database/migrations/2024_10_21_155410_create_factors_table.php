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
        Schema::create('factors', function (Blueprint $table) {
            $table->id('factor_id'); // INT Auto Increment
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // 
            $table->decimal('total_amount', 10, 2); //
            $table->enum('payment_status', ['paid', 'pending', 'failed']); //
            $table->timestamps(); // 
            $table->string('shipping_address', 255); // VARCHAR(255)
            $table->enum('payment_method', ['credit_card', 'paypal', 'bank_transfer'])->nullable(); // 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factors');
    }
};
