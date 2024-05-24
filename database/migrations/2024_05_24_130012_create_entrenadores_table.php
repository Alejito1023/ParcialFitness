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
        Schema::create('entrenadores', function (Blueprint $table) {
            $table->id('entrenador_id');
            $table->string('entrenador_nom');
            $table->string('entrenador_ape');
            $table->string('especialidad');
            $table->char('telefono',16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrenadores');
    }
};
