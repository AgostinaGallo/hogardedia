<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservacionesParticipanteTable extends Migration
{
    public function up()
    {
        Schema::create('observaciones_participante', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id(); 
            $table->integer('dni');           
            $table->dateTime('fecha');           
            $table->string('observacion', 1500);  
        });
    }
    public function down()
    {
        Schema::dropIfExists('observaciones_participante');
    }
}
