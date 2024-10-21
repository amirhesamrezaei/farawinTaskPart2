<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id'); // Auto Increment و Primary Key
            $table->string('first_name', 100); // نام مشتری
            $table->string('last_name', 100); // نام خانوادگی مشتری
            $table->string('email', 255)->unique(); // ایمیل مشتری ()
            $table->string('phone_number', 15); // شماره تلفن مشتری
            $table->string('address', 255); // آدرس مشتری
            $table->timestamps(); // created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
