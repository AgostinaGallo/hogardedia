<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAdmisionesTable extends Migration
{
    
    public function up()
    {
        Schema::create('admisiones', function (Blueprint $table) {
            $table->id();                    
            $table->string('apellido')->nullable($value = true);           
            $table->string('nombres')->nullable($value = true);             
            $table->string('genero')->nullable($value = true);           
            $table->date('fecha_nacimiento')->nullable($value = true);            
            $table->dateTime('ingreso');    

            $table->unsignedBigInteger('hogar_id')->nullable();
            $table->foreign('hogar_id')->references('id')->on('hogares');

            $table->integer('participante_dni')->unsigned()->nullable();
            $table->foreign('participante_dni')->references('dni')->on('participantes');
        
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('admisiones');
    }
}
