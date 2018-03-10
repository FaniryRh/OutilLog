<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a1bd9e005b0b5a1bd9dff17fbContactCompanyTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('contact_company_task');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('contact_company_task')) {
            Schema::create('contact_company_task', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('contact_company_id')->unsigned()->nullable();
            $table->foreign('contact_company_id', 'fk_p_80493_82948_task_con_5a1bd99d89608')->references('id')->on('contact_companies');
                $table->integer('task_id')->unsigned()->nullable();
            $table->foreign('task_id', 'fk_p_82948_80493_contactc_5a1bd99d89ff3')->references('id')->on('tasks');
                
                $table->timestamps();
                
            });
        }
    }
}
