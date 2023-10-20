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
        Schema::table('cooldowns', function (Blueprint $table) {
            $table->boolean('meeting_room')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cooldowns', function (Blueprint $table) {
            $table->boolean('meeting_room')->default(true)->change();
        });
    }
};
