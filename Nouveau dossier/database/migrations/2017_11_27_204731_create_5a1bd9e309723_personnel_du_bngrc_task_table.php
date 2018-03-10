<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a1bd9e309723PersonnelDuBngrcTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('personnel_du_bngrc_task')) {
            Schema::create('personnel_du_bngrc_task', function (Blueprint $table) {
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
                $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_82948_task_per_5a1bd9e30986f')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                $table->integer('task_id')->unsigned()->nullable();
                $table->foreign('task_id', 'fk_p_82948_80794_personne_5a1bd9e30992e')->references('id')->on('tasks')->onDelete('cascade');
                
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
        Schema::dropIfExists('personnel_du_bngrc_task');
    }
}
