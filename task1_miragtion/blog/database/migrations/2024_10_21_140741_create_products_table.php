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
        Schema::create('products', function (Blueprint $table) {

            $table->id('product_id'); //  
            $table->string('product_name', 255); // نام محصول
            $table->text('description')->nullable(); // 
            $table->decimal('price', 10, 2); // 
            $table->integer('stock'); // موجودی انبار
            $table->unsignedBigInteger('category_id'); // 
            $table->string('image_url', 255)->nullable(); // 
            $table->timestamps(); // 

            // تعریف کلید خارجی برای ارتباط با جدول categories
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
