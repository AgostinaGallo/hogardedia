<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateHogaresTable extends Migration
{

    public function up()
    {
        Schema::create('hogares', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id(); 
            $table->string('descripcion');           
            $table->bigInteger('localidad');           
            $table->string('domicilio');           
            $table->string('codigo_postal', 5);           
            $table->string('email', 70)->nullable($value = true);          
            $table->string('telefono', 20)->nullable($value = true);           
        });

        // Se insertan datos precargados, al mismo momento de crear la tabla
        DB::table('hogares')->insert([
        ['id'=>1, 'descripcion'=>'Hogar de Día Posadas', 'localidad'=>54028030000, 'domicilio'=>'Av. López Torres 4486 (esq. Av. Comandante Rosales)', 'codigo_postal'=>'3300', 'email'=>'subsecomunitaria@gmail.com', 'telefono'=>''],
        ['id'=>2, 'descripcion'=>'Hogar de Día Oberá', 'localidad'=>54091080000, 'domicilio'=>'Schnarbach y Portugal', 'codigo_postal'=>'3335', 'email'=>'', 'telefono'=>''],
        ['id'=>3, 'descripcion'=>'Hogar de Día Iguazú', 'localidad'=>54063030000, 'domicilio'=>'25 de Mayo y Río Paraná', 'codigo_postal'=>'3370', 'email'=>'', 'telefono'=>'']
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('hogares');
    }



}
