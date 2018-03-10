<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a2a46b20e746ContactCompanyOmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('contact_company_om')) {
            Schema::create('contact_company_om', function (Blueprint $table) {
                $table->integer('contact_company_id')->unsigned()->nullable();
                $table->foreign('contact_company_id', 'fk_p_80493_96639_om_conta_5a2a46b20e973')->references('id')->on('contact_companies')->onDelete('cascade');
                $table->integer('om_id')->unsigned()->nullable();
                $table->foreign('om_id', 'fk_p_96639_80493_contactc_5a2a46b20ea34')->references('id')->on('oms')->onDelete('cascade');
                
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
        Schema::dropIfExists('contact_company_om');
    }
}
