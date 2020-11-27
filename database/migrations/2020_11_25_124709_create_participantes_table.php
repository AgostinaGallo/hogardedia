<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            /* Campos agregados */
            $table->integer('codigo');
            $table->date('fecha_admision');
            $table->date('fecha_readmision');
            $table->string('expediente');
            $table->string('familia');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->date('fecha_naci');
            $table->integer('edad');
            $table->string('ge');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('barrio_chacra');
            $table->string('localidad');
            $table->string('beneficio');
            $table->string('causa_calle');
            $table->string('actividad_calle');
            $table->string('compos_fam');
            $table->string('estruc_fam');
            $table->string('nacionalidad');
            $table->string('demanda_gral');
            $table->string('derivacion');
            $table->string('sug_interdis');
            $table->string('situac_crisis');
            $table->string('redes_sosten');
            $table->string('discapacidad');
            $table->string('entrev_visita');
            $table->string('tipo_entrev_visita');
            $table->date('fecha_entrev_visita');
            $table->string('observaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participantes');
    }
}
