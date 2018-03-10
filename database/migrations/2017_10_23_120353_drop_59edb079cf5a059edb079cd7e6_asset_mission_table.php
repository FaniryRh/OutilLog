<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop59edb079cf5a059edb079cd7e6AssetMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('asset_mission');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('asset_mission')) {
            Schema::create('asset_mission', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('asset_id')->unsigned()->nullable();
            $table->foreign('asset_id', 'fk_83910_asset_mission_id')->references('id')->on('assets');
                $table->integer('mission_id')->unsigned()->nullable();
            $table->foreign('mission_id', 'fk_83146_mission_asset_id')->references('id')->on('missions');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
