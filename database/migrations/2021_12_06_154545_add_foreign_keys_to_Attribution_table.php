<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAttributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Attribution', function (Blueprint $table) {
            $table->foreign(['idEtab'], 'fk1_Attribution')->references(['id'])->on('Etablissement')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['idGroupe'], 'fk2_Attribution')->references(['id'])->on('Groupe')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Attribution', function (Blueprint $table) {
            $table->dropForeign('fk1_Attribution');
            $table->dropForeign('fk2_Attribution');
        });
    }
}
