<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservacionesEducacionTable extends Migration
{
    public function up()
    {
        Schema::create('observaciones_educacion', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id(); 
            $table->integer('dni');           
            $table->date('fecha');           
            $table->string('observacion', 1500);           
        });
    }

    public function down()
    {
        Schema::dropIfExists('observaciones_educacion');
    }
}
