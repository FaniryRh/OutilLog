<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a1bd99aa5da25a1bd99aa3ff9TaskTaskTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('task_task_tag');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('task_task_tag')) {
            Schema::create('task_task_tag', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('task_id')->unsigned()->nullable();
            $table->foreign('task_id', 'fk_p_82948_82947_tasktag__59e7238fb39e2')->references('id')->on('tasks');
                $table->integer('task_tag_id')->unsigned()->nullable();
            $table->foreign('task_tag_id', 'fk_p_82947_82948_task_tas_59e7238fb2f61')->references('id')->on('task_tags');
                
                $table->timestamps();
                
            });
        }
    }
}
