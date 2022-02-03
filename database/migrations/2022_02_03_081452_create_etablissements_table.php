<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresseRue');
            $table->string('codePostal');
            $table->string('ville');
            $table->string('telephone');
            $table->string('adresseElectronique');
            $table->integer('type');
            $table->string('civiliteResponsable');
            $table->string('nomResponsable');
            $table->string('prenomResponsable');
            $table->integer('nombreChambresOffertes');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}
