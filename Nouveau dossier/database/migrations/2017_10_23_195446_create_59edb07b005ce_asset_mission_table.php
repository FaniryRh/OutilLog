<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59edb07b005ceAssetMissionTable extends Migration
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
                $table->foreign('asset_id', 'fk_p_83910_83146_mission__59edb07b006a9')->references('id')->on('assets')->onDelete('cascade');
                $table->integer('mission_id')->unsigned()->nullable();
                $table->foreign('mission_id', 'fk_p_83146_83910_asset_mi_59edb07b00727')->references('id')->on('missions')->onDelete('cascade');
                
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
