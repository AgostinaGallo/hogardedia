<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

    protected $fillable = [
    	'dni_participante', 'dni_familiar', 'nombres', 'apellido', 'fecha_nacimiento', 'observaciones', 'domicilio'
    ];
}
