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
        Schema::create('userinfo',function(Blueprint $table){
          
            $table->id()->unique;
            $table->string('firstname');
            $table->string('lastname');
            $table->string('number');
            $table->text('address');
            $table->string('email')->unique();

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropifExists('userinfo');
    }
};
