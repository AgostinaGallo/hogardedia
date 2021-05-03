<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEntrevistasTable extends Migration
{
    public function up()
    {
        Schema::create('entrevistas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            
            $table->id();       
            $table->integer('entrevistador_dni')->nullable($value = true);          
            $table->string('entrevistador_nombres', 50)->nullable($value = true);           
            $table->date('fecha');           
            $table->string('observaciones', 1500)->nullable($value = true);

            $table->integer('participante_dni')->unsigned()->nullable();
            $table->foreign('participante_dni')->references('dni')->on('participantes');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('entrevistas');
    }
}