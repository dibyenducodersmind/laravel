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
        Schema::create('pujas', function (Blueprint $table) {
            $table->id();
            $table->string('puja_name');
            $table->float('price');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->json('date')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', [0,1,2])->default(1)->comment('0:inactive, 1:active , 2:deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pujas');
    }
};
