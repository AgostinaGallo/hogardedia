<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id();            
            $table->string('apellido', 50);
            $table->string('nombres', 70);         
            $table->dateTime('ingreso');
            $table->timestamps();

            $table->unsignedBigInteger('hogar_id')->nullable();
            $table->foreign('hogar_id')->references('id')->on('hogares');

            $table->integer('participante_dni')->unsigned()->nullable();
            $table->foreign('participante_dni')->references('dni')->on('participantes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
