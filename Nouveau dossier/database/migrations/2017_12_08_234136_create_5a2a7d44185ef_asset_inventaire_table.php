<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a2a7d44185efAssetInventaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('asset_inventaire')) {
            Schema::create('asset_inventaire', function (Blueprint $table) {
                $table->integer('asset_id')->unsigned()->nullable();
                $table->foreign('asset_id', 'fk_p_83910_93575_inventai_5a2a7d441873f')->references('id')->on('assets')->onDelete('cascade');
                $table->integer('inventaire_id')->unsigned()->nullable();
                $table->foreign('inventaire_id', 'fk_p_93575_83910_asset_in_5a2a7d4418807')->references('id')->on('inventaires')->onDelete('cascade');
                
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
        Schema::dropIfExists('asset_inventaire');
    }
}
