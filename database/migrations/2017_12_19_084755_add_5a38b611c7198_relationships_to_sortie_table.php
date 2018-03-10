<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a38b611c7198RelationshipsToSortieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sorties', function(Blueprint $table) {
            if (!Schema::hasColumn('sorties', 'parsonnel_id')) {
                $table->integer('parsonnel_id')->unsigned()->nullable();
                $table->foreign('parsonnel_id', '93574_5a37a260a04d7')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
                }
                if (!Schema::hasColumn('sorties', 'stock_id')) {
                $table->integer('stock_id')->unsigned()->nullable();
                $table->foreign('stock_id', '93574_5a1e6348a3fb4')->references('id')->on('liste_stocks')->onDelete('cascade');
                }
                if (!Schema::hasColumn('sorties', 'mission_id')) {
                $table->integer('mission_id')->unsigned()->nullable();
                $table->foreign('mission_id', '93574_5a37a26562a65')->references('id')->on('missions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('sorties', 'statut_id')) {
                $table->integer('statut_id')->unsigned()->nullable();
                $table->foreign('statut_id', '93574_5a37a267acf6d')->references('id')->on('status_sorties')->onDelete('cascade');
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
        Schema::table('sorties', function(Blueprint $table) {
            
        });
    }
}
