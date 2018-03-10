<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e5f856c3817RelationshipsToListeGroupeSectorielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liste_groupe_sectoriels', function(Blueprint $table) {
            if (!Schema::hasColumn('liste_groupe_sectoriels', 'groupe_sectoriel_id')) {
                $table->integer('groupe_sectoriel_id')->unsigned()->nullable();
                $table->foreign('groupe_sectoriel_id', '82677_59e5f855a3c36')->references('id')->on('groupe_sectoriels')->onDelete('cascade');
                }
                if (!Schema::hasColumn('liste_groupe_sectoriels', 'organisme_id')) {
                $table->integer('organisme_id')->unsigned()->nullable();
                $table->foreign('organisme_id', '82677_59e5f855abee8')->references('id')->on('contact_companies')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('liste_groupe_sectoriels', function(Blueprint $table) {
            
        });
    }
}
