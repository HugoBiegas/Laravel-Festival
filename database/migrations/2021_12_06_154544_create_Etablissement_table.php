<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Etablissement', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nom', 45);
            $table->string('adresseRue', 45);
            $table->char('codePostal', 5);
            $table->string('ville', 35);
            $table->string('tel', 13);
            $table->string('adresseElectronique', 70)->nullable();
            $table->integer('type');
            $table->string('civiliteResponsable', 12);
            $table->string('nomResponsable', 25);
            $table->string('prenomResponsable', 25)->nullable();
            $table->integer('nombreChambresOffertes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Etablissement');
    }
}
