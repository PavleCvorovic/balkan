<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHranapoljaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hranapolja', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hrana_vrsta')->unsigned();
            $table->foreign('hrana_vrsta')->references('id')->on('hrana_ipice');
            $table->string('domace')->nullable();
            $table->string('naziv');
            $table->string('opis')->nullable();
            $table->float('kolicina')->nullable();
            $table->string('lokacija')->nullable();
            $table->float('cijena');
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
        Schema::dropIfExists('hranapolja');
    }
}
