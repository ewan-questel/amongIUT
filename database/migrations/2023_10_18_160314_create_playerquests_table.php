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
        Schema::create('playerquests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_user');
            $table->foreign('no_user')->references('id')->on('users');
            $table->unsignedBigInteger('no_quest');
            $table->foreign('no_quest')->references('id')->on('quests');
            $table->boolean('start')->default(false);
            $table->boolean('finish')->default(false);
            $table->boolean('valid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playerquests');
    }
};
