<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59ddf41d684caRelationshipsToRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regions', function(Blueprint $table) {
            if (!Schema::hasColumn('regions', 'province_id')) {
                $table->integer('province_id')->unsigned()->nullable();
                $table->foreign('province_id', '80496_59dcc7c98cfa3')->references('id')->on('provinces')->onDelete('cascade');
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
        Schema::table('regions', function(Blueprint $table) {
            
        });
    }
}
