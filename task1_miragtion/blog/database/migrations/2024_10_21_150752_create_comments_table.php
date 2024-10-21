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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id'); // کلید اصلی با Auto Increment
            $table->unsignedBigInteger('product_id'); // کلید خارجی ارجاع به محصولات
            $table->unsignedBigInteger('user_id'); // کلید خارجی ارجاع به کاربران
            $table->text('comment_text'); // متن نظر کاربر
            $table->integer('rating')->nullable(); // امتیازدهی اختیاری به محصول
            $table->timestamps(); // ستون‌های created_at و updated_at

            // تعریف کلیدهای خارجی
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
