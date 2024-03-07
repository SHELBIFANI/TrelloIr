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
        Schema::create('board__lables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('board_id')->constrained();
            $table->foreignId('lable_id')->constrained();
            $table->unique('board_id', 'lable_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board__lables');
    }
};

