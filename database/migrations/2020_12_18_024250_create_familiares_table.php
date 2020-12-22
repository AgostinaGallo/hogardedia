<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliaresTable extends Migration
{
    public function up()
    {
        Schema::create('familiares', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id(); 
            $table->integer('dni_participante');           
            $table->integer('dni_familiar');           
            $table->integer('relacion');  
            $table->string('apellido', 70);
            $table->string('nombres', 70);         
            $table->date('fecha_nacimiento')->nullable($value = true);          
            $table->string('observaciones', 500)->nullable($value = true);
            $table->string('domicilio', 70)->nullable($value = true);
        });
    }

    public function down()
    {
        Schema::dropIfExists('familiares');
    }
}
