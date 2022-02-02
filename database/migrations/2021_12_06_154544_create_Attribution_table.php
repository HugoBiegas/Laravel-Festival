<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Attribution', function (Blueprint $table) {
            $table->integer('idEtab');
            $table->char('idGroupe', 4)->index('fk2_Attribution');
            $table->integer('nombreChambres');

            $table->primary(['idEtab', 'idGroupe']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Attribution');
    }
}
