<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosaopoljaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posaopolja', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('posao_vrsta')->unsigned();
            $table->foreign('posao_vrsta')->references('id')->on('posao');
            $table->string('naziv');
            $table->string('kontakt');
            $table->float('plata');
            $table->string('index');
            $table->string('opis')->nullable();
            $table->string('lokacija')->nullable();
            $table->boolean('placen')->nullable();
            $table->float('sirina')->nullable();
            $table->float('duzina')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('posaopolja');
    }
}
