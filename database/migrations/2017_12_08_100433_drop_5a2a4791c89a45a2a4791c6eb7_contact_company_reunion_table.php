<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a2a4791c89a45a2a4791c6eb7ContactCompanyReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('contact_company_reunion');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('contact_company_reunion')) {
            Schema::create('contact_company_reunion', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('contact_company_id')->unsigned()->nullable();
            $table->foreign('contact_company_id', 'fk_p_80493_82681_reunion__59e5fc9e6d3a9')->references('id')->on('contact_companies');
                $table->integer('reunion_id')->unsigned()->nullable();
            $table->foreign('reunion_id', 'fk_p_82681_80493_contactc_59e5fc9e6e02e')->references('id')->on('reunions');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
