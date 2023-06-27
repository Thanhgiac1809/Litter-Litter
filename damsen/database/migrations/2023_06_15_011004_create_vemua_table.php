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
        Schema::create('vemua', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->string('phone');
            $table->string('email');
            $table->string('dongia');
            $table->string('vene');
            $table->string('dateuse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vemua');
    }
};
