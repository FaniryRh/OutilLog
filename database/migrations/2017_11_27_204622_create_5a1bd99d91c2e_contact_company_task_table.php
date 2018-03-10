<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a1bd99d91c2eContactCompanyTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('contact_company_task')) {
            Schema::create('contact_company_task', function (Blueprint $table) {
                $table->integer('contact_company_id')->unsigned()->nullable();
                $table->foreign('contact_company_id', 'fk_p_80493_82948_task_con_5a1bd99d91d6f')->references('id')->on('contact_companies')->onDelete('cascade');
                $table->integer('task_id')->unsigned()->nullable();
                $table->foreign('task_id', 'fk_p_82948_80493_contactc_5a1bd99d91e30')->references('id')->on('tasks')->onDelete('cascade');
                
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
        Schema::dropIfExists('contact_company_task');
    }
}
