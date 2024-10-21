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
        Schema::create('likes', function (Blueprint $table) {
            $table->id('like_id'); // 
            $table->unsignedBigInteger('user_id'); // کلید خارجی ارجاع به کاربر
            $table->unsignedBigInteger('product_id')->nullable(); // کلید خارجی ارجاع به محصولات ()
            $table->unsignedBigInteger('comment_id')->nullable(); // کلید خارجی ارجاع به کامنت‌ها
            $table->timestamps(); // ستون‌های created_at و updated_at

            // تعریف کلیدهای خارجی
            
            // ایجاد Unique Index برای جلوگیری از چندین لایک توسط یک کاربر روی یک محصول یا کامنت
            $table->unique(['user_id', 'product_id']);
            $table->unique(['user_id', 'comment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
