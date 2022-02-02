<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Groupe', function (Blueprint $table) {
            $table->char('id', 4)->primary();
            $table->string('nom', 40);
            $table->string('identiteResponsable', 40);
            $table->string('adressePostale', 120);
            $table->integer('nombrePersonnes');
            $table->string('nomPays', 40);
            $table->char('hebergement', 1);
            $table->boolean('stand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Groupe');
    }
}
