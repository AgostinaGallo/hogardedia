<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('dni')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->integer('hogar')->default('0');;
        });

        DB::statement('ALTER TABLE users AUTO_INCREMENT = 2;');
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
