<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e5e3821b068RelationshipsToContactsRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts_regions', function(Blueprint $table) {
            if (!Schema::hasColumn('contacts_regions', 'region_id')) {
                $table->integer('region_id')->unsigned()->nullable();
                $table->foreign('region_id', '82590_59e5b6e9dec2f')->references('id')->on('regions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('contacts_regions', 'organisme_id')) {
                $table->integer('organisme_id')->unsigned()->nullable();
                $table->foreign('organisme_id', '82590_59e5b6e9e83db')->references('id')->on('contact_companies')->onDelete('cascade');
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
        Schema::table('contacts_regions', function(Blueprint $table) {
            
        });
    }
}
