<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59e85b9889651AssetMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('asset_mission')) {
            Schema::create('asset_mission', function (Blueprint $table) {
                $table->integer('asset_id')->unsigned()->nullable();
                $table->foreign('asset_id', 'fk_p_82954_83146_mission__59e85b988979f')->references('id')->on('assets')->onDelete('cascade');
                $table->integer('mission_id')->unsigned()->nullable();
                $table->foreign('mission_id', 'fk_p_83146_82954_asset_mi_59e85b988982a')->references('id')->on('missions')->onDelete('cascade');
                
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
        Schema::dropIfExists('asset_mission');
    }
}
