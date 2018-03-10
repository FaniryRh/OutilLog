<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dccd24cf956RelationshipsToChefDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chef_districts', function(Blueprint $table) {
            if (!Schema::hasColumn('chef_districts', 'region_id')) {
                $table->integer('region_id')->unsigned()->nullable();
                $table->foreign('region_id', '80508_59dccc6f94b9a')->references('id')->on('regions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('chef_districts', 'district_id')) {
                $table->integer('district_id')->unsigned()->nullable();
                $table->foreign('district_id', '80508_59dccc6f9ac15')->references('id')->on('districts')->onDelete('cascade');
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
        Schema::table('chef_districts', function(Blueprint $table) {
            
        });
    }
}
