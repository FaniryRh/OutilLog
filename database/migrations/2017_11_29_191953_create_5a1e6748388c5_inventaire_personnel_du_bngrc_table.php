<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a1e6748388c5InventairePersonnelDuBngrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('inventaire_personnel_du_bngrc')) {
            Schema::create('inventaire_personnel_du_bngrc', function (Blueprint $table) {
                $table->integer('inventaire_id')->unsigned()->nullable();
                $table->foreign('inventaire_id', 'fk_p_93575_80794_personne_5a1e6748389aa')->references('id')->on('inventaires')->onDelete('cascade');
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
                $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_93575_inventai_5a1e674838a46')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                
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
        Schema::dropIfExists('inventaire_personnel_du_bngrc');
    }
}
