<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';

    public $incrementing = false;

    protected $fillable = [
        'apellido',
        'nombre',
        'genero',
        'fecha_nacimiento',
        'fecha_admision',
        'fecha_readmision',
        'nacionalidad',
        'direccion_calle',
        'casa',
        'barrio',
        'discapacidad',
        'escolaridad',
        'escuela',
        'etapa_escolar',
        'grado',
        'turno',
        'repitente',
        'dias_de_asistencia',
        'familia',
        'sugerencias_interdisciplinarias',
        'estructura_familiar',
        'situacion_de_crisis',
        'redes_de_sosten',
        'cantidad_hijos',
        'cantidad_convivientes',
        'propiedad_lote',
        'instalacion_agua',
        'letrina_insanitaria',
        'red_publica_o_camara',
        'hacinamiento',
        'microbasural_cercano',
        'piso_de_tierra',
        'paredes',
        'techo',
        'procedencia_agua',
        'nro_habitaciones',
        'tipo_vivienda',
        'ingresos_fijos',
        'ingresos_por_familia',
        'expediente',
        'demanda_general',
        'hogar_id',
        'localidad_id',
    ];

    public function admision()
    {
        return $this->hasOne(Admision::class)->withTimestamps();
    }

    public function ingreso()
    {
        return $this->hasOne(Ingreso::class)->withTimestamps();
    }

    public function taller()
    {
        return $this->hasMany(Taller::class);
    }

    public function observacionEducacion()
    {
        return $this->hasMany(ObservacionEducacion::class);
    }

    public function observacionParticipante()
    {
        return $this->hasMany(ObservacionParticipante::class);
    }

    public function entrevista()
    {
        return $this->hasMany(Entrevista::class);
    }

    public function hogar()
    {
        return $this->belongsTo(Hogar::class, 'hogar_id');
    }

    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'localidad_id');
    }
    
}
