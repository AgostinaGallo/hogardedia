<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    use HasFactory;

    protected $fillable = [
        'entrevistador_dni',
        'entrevistador_nombres',
        'fecha',
        'observaciones',
        'participante_dni',
    ];

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'participante_dni');
    }
}
