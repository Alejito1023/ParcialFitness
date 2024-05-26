<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = 'equipos';
    protected $primaryKey = 'equipo_id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'tipo', 'cantidad_disponible', 'estado'];
}
