<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use HasFactory;

    protected $fillable = [
    	'participante_dni', 'dni_familiar', 'nombres', 'apellido', 'fecha_nacimiento', 'observaciones', 'domicilio'
    ];

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'participante_dni');
    }
}
