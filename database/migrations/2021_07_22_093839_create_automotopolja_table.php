<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomotopoljaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automotopolja', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('automoto_vrsta')->unsigned();
            $table->foreign('automoto_vrsta')->references('id')->on('automoto');
            $table->string('naziv');
            $table->string('marka');
            $table->string('model');
            $table->string('godina_proizvodnje')->nullable();
            $table->string('kilometraza')->nullable();
            $table->string('kubikaza')->nullable();
            $table->string('boja')->nullable();
            $table->boolean('registrovan')->nullable();
            $table->string('datum_isteka')->nullable();
            $table->string('opis');
            $table->string('stanje');
            $table->string('lokacija')->nullable();
            $table->string('cijena');
            $table->string('kontakt');

            $table->float('sirina')->nullable();
            $table->float('duzina')->nullable();
            $table->string('user');


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
        Schema::dropIfExists('automotopolja');
    }
}
