<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a2a46b210e9aRelationshipsToOmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oms', function(Blueprint $table) {
            if (!Schema::hasColumn('oms', 'mission_id')) {
                $table->integer('mission_id')->unsigned()->nullable();
                $table->foreign('mission_id', '96639_5a2a46b08a63d')->references('id')->on('missions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('oms', 'ordonnee_a_id')) {
                $table->integer('ordonnee_a_id')->unsigned()->nullable();
                $table->foreign('ordonnee_a_id', '96639_5a2a46b097189')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                }
                if (!Schema::hasColumn('oms', 'etat_id')) {
                $table->integer('etat_id')->unsigned()->nullable();
                $table->foreign('etat_id', '96639_5a2a46b0a2268')->references('id')->on('etat_oms')->onDelete('cascade');
                }
                if (!Schema::hasColumn('oms', 'etat_rapport_de_mission_id')) {
                $table->integer('etat_rapport_de_mission_id')->unsigned()->nullable();
                $table->foreign('etat_rapport_de_mission_id', '96639_5a2a46b0ac185')->references('id')->on('etat_rapport_oms')->onDelete('cascade');
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
        Schema::table('oms', function(Blueprint $table) {
            
        });
    }
}
