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
        Schema::create('quests', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title');
            $table->unsignedBigInteger('no_place');
            $table->foreign('no_place')->references('id')->on('places');
            $table->integer('order')->nullable();
            $table->integer('locX')->default(0);
            $table->integer('locY')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quests');
    }
};
