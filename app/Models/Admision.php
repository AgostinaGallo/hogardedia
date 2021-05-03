<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admision extends Model
{
    use HasFactory;

    protected $fillable = [
        'hogar',
        'apellido',
        'nombres',
        'genero',
        'fecha_nacimiento',
        'ingreso',
        'participante_dni',
    ];

    public function hogar()
    {
        return $this->belongsTo(Hogar::class, 'hogar_id');
    }

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'participante_dni');
    }
}
