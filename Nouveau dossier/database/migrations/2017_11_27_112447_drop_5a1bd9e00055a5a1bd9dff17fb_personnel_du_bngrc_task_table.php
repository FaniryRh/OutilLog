<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a1bd9e00055a5a1bd9dff17fbPersonnelDuBngrcTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('personnel_du_bngrc_task');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('personnel_du_bngrc_task')) {
            Schema::create('personnel_du_bngrc_task', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('personnel_du_bngrc_id')->unsigned()->nullable();
            $table->foreign('personnel_du_bngrc_id', 'fk_p_80794_82948_task_per_5a1bd99c2aaf7')->references('id')->on('personnel_du_bngrcs');
                $table->integer('task_id')->unsigned()->nullable();
            $table->foreign('task_id', 'fk_p_82948_80794_personne_5a1bd99c2b789')->references('id')->on('tasks');
                
                $table->timestamps();
                
            });
        }
    }
}
