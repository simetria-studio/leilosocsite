<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nome');
            $table->string('apelido');
            $table->string('pais');
            $table->string('codigo_pais');
            $table->string('telemovel');
            $table->string('morada');
            $table->string('codigo_postal');
            $table->string('localidade');
            $table->date('data_nascimento');
            $table->string('nif');
            $table->string('sms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_users');
    }
}
