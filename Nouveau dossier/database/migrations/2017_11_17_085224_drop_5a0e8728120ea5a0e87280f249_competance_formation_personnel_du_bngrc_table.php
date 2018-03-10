<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a0e8728120ea5a0e87280f249CompetanceFormationPersonnelDuBngrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('competance_formation_personnel_du_bngrc');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('competance_formation_personnel_du_bngrc')) {
            Schema::create('competance_formation_personnel_du_bngrc', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('competance_formation_id')->unsigned()->nullable();
            $table->foreign('competance_formation_id', 'fk_p_90459_80794_personne_5a0e86e790e1a')->references('id')->on('competance_formations');
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
            $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_90459_competan_5a0e86e78fca1')->references('id')->on('personnel_du_bngrcs');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
