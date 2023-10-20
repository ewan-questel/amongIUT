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
        Schema::create('cooldowns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_user');
            $table->foreign('no_user')->references('id')->on('users');
            $table->enum('action', ['start', 'kill', 'o2', 'circuit_breaker', 'vitals', 'error404', 'light']);
            $table->boolean('active')->default(true);
            $table->boolean('meeting_room')->default(true);
            $table->integer('sab_duration');
            $table->integer('cd_delay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cooldowns');
    }
};
