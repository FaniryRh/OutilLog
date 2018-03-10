<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop59edb0b5969ec59edb0b594ff1AssetMissionTable extends Migration
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
            $table->foreign('asset_id', 'fk_p_83910_83146_mission__59edb07af0865')->references('id')->on('assets');
                $table->integer('mission_id')->unsigned()->nullable();
            $table->foreign('mission_id', 'fk_p_83146_83910_asset_mi_59edb07aefedc')->references('id')->on('missions');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
