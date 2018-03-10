<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59e5fca0948c4PersonnelDuBngrcReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('personnel_du_bngrc_reunion')) {
            Schema::create('personnel_du_bngrc_reunion', function (Blueprint $table) {
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
                $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_82681_reunion__59e5fca0949a3')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                $table->integer('reunion_id')->unsigned()->nullable();
                $table->foreign('reunion_id', 'fk_p_82681_80794_personne_59e5fca094a4c')->references('id')->on('reunions')->onDelete('cascade');
                
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
        Schema::dropIfExists('personnel_du_bngrc_reunion');
    }
}
