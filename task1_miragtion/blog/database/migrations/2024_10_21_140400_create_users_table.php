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
            $table->id(); // user_id
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('phone_number', 15);
            $table->string('address', 255);
            $table->enum('role', ['Admin', 'User', 'Moderator']); // 
            $table->timestamps(); // created_at و updated_at
            $table->enum('status', ['Active', 'Inactive', 'Banned']); // 
            $table->dateTime('last_login')->nullable();
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
