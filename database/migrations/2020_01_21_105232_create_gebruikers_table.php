<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGebruikersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gebruikers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emailadres');
            $table->string('wachtwoord');
            $table->string('naam');
            $table->string('voornaam');
            $table->string('roepnaam')->nullable();
            $table->string('straat');
            $table->string('huisnummer');
            $table->dateTime('geboortedatum');
            $table->string('telefoon');
            $table->boolean('2detshirt');
            $table->string('opmerking')->nullable();
            $table->string('rijksregisternr')->nullable();
            $table->string('postcode');
            $table->boolean('eersteAanmelding');
            $table->boolean('lunchpakket');
            $table->boolean('actief')->nullable();
            $table->string('qrcode')->nullable();
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('tshirtId');
            $table->unsignedBigInteger('rolId');

            $table->foreign('tshirtId')->references('id')->on('tshirts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rolId')->references('id')->on('rols')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gebruikers');
    }
}
