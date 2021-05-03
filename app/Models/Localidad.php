<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;

    public function hogar()
    {
        return $this->hasMany(Hogar::class);
    }

    public function participante()
    {
        return $this->hasMany(Participante::class);
    }
}
