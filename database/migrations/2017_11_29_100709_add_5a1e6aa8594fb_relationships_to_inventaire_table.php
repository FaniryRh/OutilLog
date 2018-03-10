<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a1e6aa8594fbRelationshipsToInventaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventaires', function(Blueprint $table) {
            if (!Schema::hasColumn('inventaires', 'mission_id')) {
                $table->integer('mission_id')->unsigned()->nullable();
                $table->foreign('mission_id', '93575_5a1e6746ad2c6')->references('id')->on('missions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('inventaires', 'stock_id')) {
                $table->integer('stock_id')->unsigned()->nullable();
                $table->foreign('stock_id', '93575_5a1e6746b952d')->references('id')->on('liste_stocks')->onDelete('cascade');
                }
                if (!Schema::hasColumn('inventaires', 'asset_id')) {
                $table->integer('asset_id')->unsigned()->nullable();
                $table->foreign('asset_id', '93575_5a1e6746c3c5c')->references('id')->on('assets')->onDelete('cascade');
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
        Schema::table('inventaires', function(Blueprint $table) {
            
        });
    }
}
