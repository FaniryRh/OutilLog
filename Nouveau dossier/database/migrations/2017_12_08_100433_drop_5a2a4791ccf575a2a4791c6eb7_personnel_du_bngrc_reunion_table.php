<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a2a4791ccf575a2a4791c6eb7PersonnelDuBngrcReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('personnel_du_bngrc_reunion');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('personnel_du_bngrc_reunion')) {
            Schema::create('personnel_du_bngrc_reunion', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
            $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_82681_reunion__59e5fc9f81296')->references('id')->on('personnel_du_bngrcs');
                $table->integer('reunion_id')->unsigned()->nullable();
            $table->foreign('reunion_id', 'fk_p_82681_80794_personne_59e5fc9f8224a')->references('id')->on('reunions');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
