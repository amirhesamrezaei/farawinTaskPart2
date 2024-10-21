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
        Schema::create('categories', function (Blueprint $table) {

            $table->id('category_id'); // 
            $table->string('category_name', 100); // نام دسته‌بندی
            $table->text('description')->nullable(); // توضیحات ()
            $table->unsignedBigInteger('parent_id')->nullable(); // 
            $table->timestamps(); //

            $table->foreign('parent_id')->references('category_id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
