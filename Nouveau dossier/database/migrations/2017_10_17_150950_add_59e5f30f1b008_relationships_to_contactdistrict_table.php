<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e5f30f1b008RelationshipsToContactDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_districts', function(Blueprint $table) {
            if (!Schema::hasColumn('contact_districts', 'district_id')) {
                $table->integer('district_id')->unsigned()->nullable();
                $table->foreign('district_id', '82670_59e5f30de858d')->references('id')->on('districts')->onDelete('cascade');
                }
                if (!Schema::hasColumn('contact_districts', 'organisme_id')) {
                $table->integer('organisme_id')->unsigned()->nullable();
                $table->foreign('organisme_id', '82670_59e5f30deeab0')->references('id')->on('contact_companies')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_districts', function(Blueprint $table) {
            
        });
    }
}
