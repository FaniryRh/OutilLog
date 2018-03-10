<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59e85b98868bcMissionPersonnelDuBngrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('mission_personnel_du_bngrc')) {
            Schema::create('mission_personnel_du_bngrc', function (Blueprint $table) {
                $table->integer('mission_id')->unsigned()->nullable();
                $table->foreign('mission_id', 'fk_p_83146_80794_personne_59e85b98869c3')->references('id')->on('missions')->onDelete('cascade');
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
                $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_83146_mission__59e85b9886a51')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                
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
        Schema::dropIfExists('mission_personnel_du_bngrc');
    }
}
