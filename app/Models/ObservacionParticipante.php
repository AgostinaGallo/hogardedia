<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObservacionParticipante extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'observacion',
        'participante_dni',
    ];

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'participante_dni');
    }
}
