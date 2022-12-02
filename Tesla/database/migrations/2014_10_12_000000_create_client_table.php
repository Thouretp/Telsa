<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('client', function (Blueprint $table) {
            $table->id('numclient');
            $table->integer('numcompte');
            $table->string('prenomclient');
            $table->string('nomclient');
            $table->string('adressemailclient')->unique();
            $table->numeric('numerotelephone');
            $table->string('secondprenom');
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
        Schema::dropIfExists('client');
    }
};
