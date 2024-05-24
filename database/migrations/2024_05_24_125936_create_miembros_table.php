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
        Schema::create('miembros', function (Blueprint $table) {
            $table->id('miembro_id');
            $table->string('miembro_nom');
            $table->string('miembro_ape');
            $table->dateTime('fecha_nacimiento', precision: 0);
            $table->string('genero');
            $table->char('telefono',16);
            $table->char('email',100);
            $table->dateTime('fecha_inicio', precision: 0);
            $table->foreignId('suscripcion_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
