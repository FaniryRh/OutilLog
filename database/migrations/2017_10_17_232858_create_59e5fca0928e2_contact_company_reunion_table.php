<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59e5fca0928e2ContactCompanyReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('contact_company_reunion')) {
            Schema::create('contact_company_reunion', function (Blueprint $table) {
                $table->integer('contact_company_id')->unsigned()->nullable();
                $table->foreign('contact_company_id', 'fk_p_80493_82681_reunion__59e5fca0929c3')->references('id')->on('contact_companies')->onDelete('cascade');
                $table->integer('reunion_id')->unsigned()->nullable();
                $table->foreign('reunion_id', 'fk_p_82681_80493_contactc_59e5fca092a45')->references('id')->on('reunions')->onDelete('cascade');
                
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
        Schema::dropIfExists('contact_company_reunion');
    }
}
