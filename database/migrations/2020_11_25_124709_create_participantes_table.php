<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{

    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';

            $table->timestamps();            
            $table->integer('dni', false, true)->length(11)->primary();            
            $table->string('apellido', 70);
            $table->string('nombre', 70);
            $table->string('genero', 1);
            $table->date('fecha_nacimiento');
            $table->date('fecha_admision')->nullable($value = true);
            $table->date('fecha_readmision')->nullable($value = true);
            $table->string('nacionalidad')->nullable($value = true);
            $table->integer('localidad')->nullable($value = true);
            $table->string('direccion_calle', 70)->nullable($value = true);
            $table->string('casa', 50)->nullable($value = true);
            $table->string('barrio', 50)->nullable($value = true);
            $table->string('discapacidad', 50)->nullable($value = true);
            $table->string('escolaridad', 50)->nullable($value = true);
            $table->string('escuela', 70)->nullable($value = true);
            $table->string('etapa_escolar', 15)->nullable($value = true);
            $table->integer('grado')->nullable($value = true);
            $table->string('turno', 15)->nullable($value = true);
            $table->string('repitente', 15)->nullable($value = true);
            $table->integer('dias_de_asistencia')->nullable($value = true);
            $table->string('familia', 50)->nullable($value = true);
            $table->string('sugerencias_interdisciplinarias', 50)->nullable($value = true);
            $table->string('estructura_familiar', 50)->nullable($value = true);
            $table->string('situacion_de_crisis', 50)->nullable($value = true);
            $table->string('redes_de_sosten', 50)->nullable($value = true);
            $table->integer('cantidad_hijos')->nullable($value = true);
            $table->integer('cantidad_convivientes')->nullable($value = true);
            $table->string('propiedad_lote', 50)->nullable($value = true);
            $table->string('instalacion_agua', 50)->nullable($value = true);
            $table->string('letrina_insanitaria', 50)->nullable($value = true);
            $table->string('red_publica_o_camara', 50)->nullable($value = true);
            $table->string('hacinamiento', 50)->nullable($value = true);
            $table->string('microbasural_cercano', 50)->nullable($value = true);
            $table->string('piso_de_tierra', 50)->nullable($value = true);
            $table->integer('paredes')->nullable($value = true);
            $table->integer('techo')->nullable($value = true);
            $table->integer('procedencia_agua')->nullable($value = true);
            $table->integer('nro_habitaciones')->nullable($value = true);
            $table->integer('tipo_vivienda')->nullable($value = true);
            $table->string('ingresos_fijos', 50)->nullable($value = true);
            $table->decimal('ingresos_por_familia', $precision = 32, $scale = 2)->nullable($value = true);
            $table->string('expediente', 50)->nullable($value = true);
            $table->string('demanda_general', 500)->nullable($value = true);
            $table->string('hogar', 11);


        });
    }


    public function down()
    {
        Schema::dropIfExists('participantes');
    }

}
