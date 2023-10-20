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
            $table->integer('locX')->default(0)->nullable();
            $table->integer('locY')->default(0)->nullable();
            $table->integer('locX2')->default(0)->nullable();
            $table->integer('locY2')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cooldowns', function (Blueprint $table) {
            $table->dropColumn('locX');
            $table->dropColumn('locY');
            $table->dropColumn('locX2');
            $table->dropColumn('locY2');
        });
    }
};
