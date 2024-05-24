<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    use HasFactory;
    protected $table ='miembros';
    protected $primaryKey ='miembro_id';
    public $timestamps = false;
}
