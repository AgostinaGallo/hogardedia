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
            $table->integer('dni');            
            $table->string('apellido', 50);
            $table->string('nombres', 70);         
            $table->date('ingreso');           
            $table->integer('hogar');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
