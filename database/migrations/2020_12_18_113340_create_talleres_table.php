<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalleresTable extends Migration
{
    public function up()
    {
        Schema::create('talleres', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->id(); 
            $table->integer('dni');                    
            $table->string('taller', 70);  
        });
    }
    public function down()
    {
        Schema::dropIfExists('talleres');
    }
}
