<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo_alumno extends Model
{
     protected $fillable = [
        'nombre',
        'modulo',
        'calificacion',
    ];
} 

// Modelo para alumno
// Lo mismo pero usando el comando de artisan
