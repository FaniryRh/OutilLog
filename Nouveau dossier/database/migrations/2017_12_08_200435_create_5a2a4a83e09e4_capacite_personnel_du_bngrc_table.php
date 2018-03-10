<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a2a4a83e09e4CapacitePersonnelDuBngrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('capacite_personnel_du_bngrc')) {
            Schema::create('capacite_personnel_du_bngrc', function (Blueprint $table) {
                $table->integer('capacite_id')->unsigned()->nullable();
                $table->foreign('capacite_id', 'fk_p_96644_80794_personne_5a2a4a83e0ae8')->references('id')->on('capacites')->onDelete('cascade');
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
                $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_96644_capacite_5a2a4a83e0ba8')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacite_personnel_du_bngrc');
    }
}
