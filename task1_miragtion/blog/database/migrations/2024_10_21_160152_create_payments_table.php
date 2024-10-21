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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id'); // Auto Increment و Primary Key
            $table->unsignedBigInteger('factor_id'); // 
            $table->decimal('amount', 10, 2); // 
            $table->enum('payment_method', ['credit_card', 'paypal', 'bank_transfer']); // 
            $table->enum('payment_status', ['pending', 'completed', 'failed']); // 
            $table->string('transaction_id', 255); // 
            $table->timestamps(); // created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
