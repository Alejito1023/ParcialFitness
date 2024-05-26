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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id('inscripciones_id');
            $table->unsignedBigInteger('miembro_id');
            $table->unsignedBigInteger('clase_id');
            $table->date('fecha_inscripcion');
            $table->timestamps();

            $table->foreign('miembro_id')->references('miembro_id')->on('miembros')->onDelete('cascade');
            $table->foreign('clase_id')->references('clase_id')->on('clases')->onDelete('cascade');
    });
}

           
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
