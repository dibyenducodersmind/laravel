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
        Schema::create('puja_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('puja_id')->constrained('pujas', 'id')->onDelete('cascade');
            $table->string('benefits_header')->nullable();
            $table->string('benefits_description')->nullable();
            $table->enum('status', [0,1,2])->default(1)->comment('0:inactive, 1:active,2:deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puja_benefits');
    }
};
