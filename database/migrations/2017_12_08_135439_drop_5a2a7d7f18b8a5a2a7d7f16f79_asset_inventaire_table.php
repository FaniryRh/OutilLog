<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a2a7d7f18b8a5a2a7d7f16f79AssetInventaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('asset_inventaire');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('asset_inventaire')) {
            Schema::create('asset_inventaire', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('asset_id')->unsigned()->nullable();
            $table->foreign('asset_id', 'fk_p_83910_93575_inventai_5a2a7d441281c')->references('id')->on('assets');
                $table->integer('inventaire_id')->unsigned()->nullable();
            $table->foreign('inventaire_id', 'fk_p_93575_83910_asset_in_5a2a7d44130bf')->references('id')->on('inventaires');
                
                $table->timestamps();
                
            });
        }
    }
}
