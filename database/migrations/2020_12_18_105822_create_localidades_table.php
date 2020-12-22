<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateLocalidadesTable extends Migration
{
    public function up()
    {
        Schema::create('localidades', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            // Nota: en el prototipo decia BIGINT(20); cualquier cosa arreglar este campo.
            $table->id(); 
            $table->string('descripcion',70);           
        });
    


    DB::table('localidades')->insert([
        ['id'=>54007010000, 'descripcion'=>'APOSTOLES'],
        ['id'=>54007020000, 'descripcion'=>'AZARA'],
        ['id'=>54007025000, 'descripcion'=>'BARRIO RURAL'],
        ['id'=>54007030000, 'descripcion'=>'ESTACION APOSTOLES'],
        ['id'=>54007040000, 'descripcion'=>'PINDAPOY'],
        ['id'=>54007050000, 'descripcion'=>'RINCON DE AZARA'],
        ['id'=>54007060000, 'descripcion'=>'SAN JOSE'],
        ['id'=>54007070000, 'descripcion'=>'TRES CAPONES'],
        ['id'=>54014010000, 'descripcion'=>'ARISTOBULO DEL VALLE'],
        ['id'=>54014020000, 'descripcion'=>'CAMPO GRANDE'],
        ['id'=>54014030000, 'descripcion'=>'DOS DE MAYO NUCLEO I'],
        ['id'=>54014030001, 'descripcion'=>'NUCLEO I'],
        ['id'=>54014030002, 'descripcion'=>'NUCLEO II'],
        ['id'=>54014050000, 'descripcion'=>'DOS DE MAYO NUCLEO III'],
        ['id'=>54014055000, 'descripcion'=>'KILOMETRO 17 [RUTA 8]'],
        ['id'=>54014060000, 'descripcion'=>'1 DE MAYO'],
        ['id'=>54014070000, 'descripcion'=>'PUEBLO ILLIA'],
        ['id'=>54014080000, 'descripcion'=>'SALTO ENCANTADO'],
        ['id'=>54021005000, 'descripcion'=>'BARRIO DEL LAGO'],
        ['id'=>54021010000, 'descripcion'=>'BONPLAND'],
        ['id'=>54021020000, 'descripcion'=>'CANDELARIA'],
        ['id'=>54021030000, 'descripcion'=>'CERRO CORA'],
        ['id'=>54021040000, 'descripcion'=>'LORETO'],
        ['id'=>54021050000, 'descripcion'=>'MARTIRES'],
        ['id'=>54021060000, 'descripcion'=>'PROFUNDIDAD'],
        ['id'=>54021070000, 'descripcion'=>'PUERTO SANTA ANA'],
        ['id'=>54021080000, 'descripcion'=>'SANTA ANA'],
        ['id'=>54028005000, 'descripcion'=>'BARRIO NUEVO GARUPA'],
        ['id'=>54028010000, 'descripcion'=>'GARUPA'],
        ['id'=>54028020000, 'descripcion'=>'NEMESIO PARMA'],
        ['id'=>54028030000, 'descripcion'=>'POSADAS'],
        ['id'=>54035010000, 'descripcion'=>'BARRA CONCEPCION'],
        ['id'=>54035020000, 'descripcion'=>'CONCEPCION DE LA SIERRA'],
        ['id'=>54035030000, 'descripcion'=>'LA CORITA'],
        ['id'=>54035040000, 'descripcion'=>'SANTA MARIA'],
        ['id'=>54042010000, 'descripcion'=>'COLONIA VICTORIA'],
        ['id'=>54042020000, 'descripcion'=>'ELDORADO'],
        ['id'=>54042030000, 'descripcion'=>'MARIA MAGDALENA'],
        ['id'=>54042035000, 'descripcion'=>'NUEVA DELICIA'],
        ['id'=>54042040000, 'descripcion'=>'9 DE JULIO'],
        ['id'=>54042050000, 'descripcion'=>'9 DE JULIO KILOMETRO 20'],
        ['id'=>54042055000, 'descripcion'=>'PUEBLO NUEVO'],
        ['id'=>54042060000, 'descripcion'=>'PUERTO MADO'],
        ['id'=>54042070000, 'descripcion'=>'PUERTO PINARES'],
        ['id'=>54042080000, 'descripcion'=>'SANTIAGO DE LINIERS'],
        ['id'=>54042090000, 'descripcion'=>'VALLE HERMOSO'],
        ['id'=>54042100000, 'descripcion'=>'VILLA ROULET'],
        ['id'=>54049010000, 'descripcion'=>'ALMIRANTE BROWN'],
        ['id'=>54049020000, 'descripcion'=>'BERNARDO DE IRIGOYEN'],
        ['id'=>54049025000, 'descripcion'=>'CABUREI'],
        ['id'=>54049030000, 'descripcion'=>'DOS HERMANAS'],
        ['id'=>54049040000, 'descripcion'=>'INTEGRACION'],
        ['id'=>54049043000, 'descripcion'=>'PIÃ?ALITO NORTE'],
        ['id'=>54049045000, 'descripcion'=>'PUERTO ANDRESITO'],
        ['id'=>54049047000, 'descripcion'=>'PUERTO DESEADO'],
        ['id'=>54049050000, 'descripcion'=>'SAN ANTONIO'],
        ['id'=>54056010000, 'descripcion'=>'EL SOBERBIO'],
        ['id'=>54056020000, 'descripcion'=>'FRACRAN'],
        ['id'=>54056030000, 'descripcion'=>'SAN VICENTE'],
        ['id'=>54063010000, 'descripcion'=>'ESPERANZA'],
        ['id'=>54063020000, 'descripcion'=>'LIBERTAD'],
        ['id'=>54063030000, 'descripcion'=>'PUERTO IGUAZU'],
        ['id'=>54063035000, 'descripcion'=>'VILLA COOPERATIVA'],
        ['id'=>54063040000, 'descripcion'=>'WANDA'],
        ['id'=>54070010000, 'descripcion'=>'ALMAFUERTE'],
        ['id'=>54070020000, 'descripcion'=>'ARROYO DEL MEDIO'],
        ['id'=>54070030000, 'descripcion'=>'CAA - YARI'],
        ['id'=>54070040000, 'descripcion'=>'CERRO AZUL'],
        ['id'=>54070050000, 'descripcion'=>'DOS ARROYOS'],
        ['id'=>54070060000, 'descripcion'=>'GOBERNADOR LOPEZ'],
        ['id'=>54070070000, 'descripcion'=>'LEANDRO N. ALEM'],
        ['id'=>54070080000, 'descripcion'=>'OLEGARIO V. ANDRADE'],
        ['id'=>54070090000, 'descripcion'=>'VILLA LIBERTAD'],
        ['id'=>54077010000, 'descripcion'=>'CAPIOVI'],
        ['id'=>54077015000, 'descripcion'=>'CAPIOVICIÃ?O'],
        ['id'=>54077020000, 'descripcion'=>'EL ALCAZAR'],
        ['id'=>54077030000, 'descripcion'=>'GARUHAPE'],
        ['id'=>54077040000, 'descripcion'=>'MBOPICUA'],
        ['id'=>54077050000, 'descripcion'=>'PUERTO LEONI'],
        ['id'=>54077060000, 'descripcion'=>'PUERTO RICO'],
        ['id'=>54077070000, 'descripcion'=>'RUIZ DE MONTOYA'],
        ['id'=>54077080000, 'descripcion'=>'SAN ALBERTO'],
        ['id'=>54077090000, 'descripcion'=>'SAN GOTARDO'],
        ['id'=>54077100000, 'descripcion'=>'SAN MIGUEL'],
        ['id'=>54077110000, 'descripcion'=>'VILLA AKERMAN'],
        ['id'=>54077120000, 'descripcion'=>'VILLA URRUTIA'],
        ['id'=>54084003000, 'descripcion'=>'BARRIO CUATRO BOCAS'],
        ['id'=>54084005000, 'descripcion'=>'BARRIO GUATAMBU'],
        ['id'=>54084007000, 'descripcion'=>'BARIO ITA'],
        ['id'=>54084010000, 'descripcion'=>'CARAGUATAY'],
        ['id'=>54084020000, 'descripcion'=>'LAHARRAGUE'],
        ['id'=>54084030000, 'descripcion'=>'MONTECARLO'],
        ['id'=>54084040000, 'descripcion'=>'PIRAY KILOMETRO 18'],
        ['id'=>54084050000, 'descripcion'=>'PUERTO PIRAY'],
        ['id'=>54084060000, 'descripcion'=>'TARUMA'],
        ['id'=>54084070000, 'descripcion'=>'VILLA PARODI'],
        ['id'=>54091010000, 'descripcion'=>'ALBERDI'],
        ['id'=>54091013000, 'descripcion'=>'BARRIO ESCUELA 461'],
        ['id'=>54091017000, 'descripcion'=>'BARRIO ESCUELA 633'],
        ['id'=>54091020000, 'descripcion'=>'CAMPO RAMON'],
        ['id'=>54091030000, 'descripcion'=>'CAMPO VIERA'],
        ['id'=>54091040000, 'descripcion'=>'EL SALTO'],
        ['id'=>54091050000, 'descripcion'=>'GENERAL ALVEAR'],
        ['id'=>54091060000, 'descripcion'=>'GUARANI'],
        ['id'=>54091070000, 'descripcion'=>'LOS HELECHOS'],
        ['id'=>54091080000, 'descripcion'=>'OBERA'],
        ['id'=>54091090000, 'descripcion'=>'PANAMBI'],
        ['id'=>54091100000, 'descripcion'=>'PANAMBI KILOMETRO 8'],
        ['id'=>54091105000, 'descripcion'=>'PANAMBI KILOMETRO 15'],
        ['id'=>54091110000, 'descripcion'=>'SAN MARTIN'],
        ['id'=>54091120000, 'descripcion'=>'VILLA BONITA'],
        ['id'=>54098005000, 'descripcion'=>'BARRIO TUNGOIL'],
        ['id'=>54098010000, 'descripcion'=>'COLONIA POLANA'],
        ['id'=>54098020000, 'descripcion'=>'CORPUS'],
        ['id'=>54098030000, 'descripcion'=>'DOMINGO SAVIO'],
        ['id'=>54098040000, 'descripcion'=>'GENERAL URQUIZA'],
        ['id'=>54098050000, 'descripcion'=>'GOBERNADOR ROCA'],
        ['id'=>54098060000, 'descripcion'=>'HELVECIA'],
        ['id'=>54098070000, 'descripcion'=>'HIPOLITO YRIGOYEN'],
        ['id'=>54098080000, 'descripcion'=>'JARDIN AMERICA'],
        ['id'=>54098090000, 'descripcion'=>'OASIS'],
        ['id'=>54098100000, 'descripcion'=>'ROCA CHICA'],
        ['id'=>54098110000, 'descripcion'=>'SAN IGNACIO'],
        ['id'=>54098120000, 'descripcion'=>'SANTO PIPO'],
        ['id'=>54105010000, 'descripcion'=>'FLORENTINO AMEGHINO'],
        ['id'=>54105020000, 'descripcion'=>'ITACARUARE'],
        ['id'=>54105030000, 'descripcion'=>'MOJON GRANDE'],
        ['id'=>54105040000, 'descripcion'=>'SAN JAVIER'],
        ['id'=>54112010000, 'descripcion'=>'CRUCE CABALLERO'],
        ['id'=>54112020000, 'descripcion'=>'PARAISO'],
        ['id'=>54112030000, 'descripcion'=>'PIÃ?ALITO SUR'],
        ['id'=>54112040000, 'descripcion'=>'SAN PEDRO'],
        ['id'=>54112050000, 'descripcion'=>'TOBUNA'],
        ['id'=>54119010000, 'descripcion'=>'ALBA POSSE'],
        ['id'=>54119020000, 'descripcion'=>'COLONIA ALICIA'],
        ['id'=>54119025000, 'descripcion'=>'ALICIA BAJA'],
        ['id'=>54119030000, 'descripcion'=>'COLONIA AURORA'],
        ['id'=>54119040000, 'descripcion'=>'SAN FRANCISCO DE ASIS'],
        ['id'=>54119050000, 'descripcion'=>'SANTA RITA'],
        ['id'=>54119060000, 'descripcion'=>'25 DE MAYO']
        ]);
    }
    public function down()
    {
        Schema::dropIfExists('localidades');
    }
}
