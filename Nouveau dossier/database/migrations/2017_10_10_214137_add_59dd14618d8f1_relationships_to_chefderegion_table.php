<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dd14618d8f1RelationshipsToChefDeRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chef_de_regions', function(Blueprint $table) {
            if (!Schema::hasColumn('chef_de_regions', 'province_id')) {
                $table->integer('province_id')->unsigned()->nullable();
                $table->foreign('province_id', '80502_59dcc92f9df5c')->references('id')->on('provinces')->onDelete('cascade');
                }
                if (!Schema::hasColumn('chef_de_regions', 'region_id')) {
                $table->integer('region_id')->unsigned()->nullable();
                $table->foreign('region_id', '80502_59dcc92fa6f14')->references('id')->on('regions')->onDelete('cascade');
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
        Schema::table('chef_de_regions', function(Blueprint $table) {
            
        });
    }
}
