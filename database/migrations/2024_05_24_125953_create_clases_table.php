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
        Schema::create('clases', function (Blueprint $table) {
            $table->id('clase_id');
            $table->string('clase_nom');
            $table->string('clase_descp');
            $table->dateTime('hora_inicio', precision: 0);
            $table->time('duracion');
            $table->foreignId('entrenador_id');
            $table->char('capacidad',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
