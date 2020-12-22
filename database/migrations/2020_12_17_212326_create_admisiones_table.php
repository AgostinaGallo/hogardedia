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
            $table->engine = 'MyISAM';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->integer('id'); 
            $table->integer('hogar');           
            $table->integer('dni');           
            $table->string('apellido')->nullable($value = true);           
            $table->string('nombres')->nullable($value = true);             
            $table->string('genero')->nullable($value = true);           
            $table->date('fecha_nacimiento')->nullable($value = true);     
            // En caso de no ser el tipo de dato correcto, corregir; en el prototipo de SQL es tipo DATETIME.
            $table->date('ingreso'); 


            $table->primary(array('id', 'dni'));

            
        });

        DB::statement('ALTER TABLE admisiones MODIFY id INTEGER NOT NULL AUTO_INCREMENT');


    }

    public function down()
    {
        Schema::dropIfExists('admisiones');
    }
}
