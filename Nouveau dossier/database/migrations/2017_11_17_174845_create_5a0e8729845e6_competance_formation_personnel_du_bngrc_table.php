<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a0e8729845e6CompetanceFormationPersonnelDuBngrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('competance_formation_personnel_du_bngrc')) {
            Schema::create('competance_formation_personnel_du_bngrc', function (Blueprint $table) {
                $table->integer('competance_formation_id')->unsigned()->nullable();
                $table->foreign('competance_formation_id', 'fk_p_90459_80794_personne_5a0e8729846e8')->references('id')->on('competance_formations')->onDelete('cascade');
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
                $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_90459_competan_5a0e872984779')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                
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
        Schema::dropIfExists('competance_formation_personnel_du_bngrc');
    }
}
