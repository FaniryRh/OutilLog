<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5a2a7d80445f9AssetInventaireTable extends Migration
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
                $table->foreign('asset_id', 'fk_p_83910_93575_inventai_5a2a7d80446e6')->references('id')->on('assets')->onDelete('cascade');
                $table->integer('inventaire_id')->unsigned()->nullable();
                $table->foreign('inventaire_id', 'fk_p_93575_83910_asset_in_5a2a7d8044766')->references('id')->on('inventaires')->onDelete('cascade');
                
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
