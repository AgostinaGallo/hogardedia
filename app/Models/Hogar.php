<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hogar extends Model
{
    use HasFactory;

    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'participante_dni');
    }

    public function ingreso()
    {
        return $this->hasMany(Ingreso::class);
    }

    public function admision()
    {
        return $this->hasMany(Admision::class);
    }

    public function participante()
    {
        return $this->hasMany(Participante::class);
    }
}
