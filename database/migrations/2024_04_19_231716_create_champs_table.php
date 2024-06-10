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
        Schema::create('champs', function (Blueprint $table) {
            $table->id();
            $table->integer('tonnage_ant');
            $table->integer('superficie');
            $table->string('description')->nullable();
            $table->string('origine_geo');
            $table->datetime('date_production');
            $table->datetime('date_recolte');
            $table->foreignId('type_culture_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champs');
    }
};
