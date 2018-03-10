<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a1e7c367cfa0RelationshipsToSortieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sorties', function(Blueprint $table) {
            if (!Schema::hasColumn('sorties', 'stock_id')) {
                $table->integer('stock_id')->unsigned()->nullable();
                $table->foreign('stock_id', '93574_5a1e6348a3fb4')->references('id')->on('liste_stocks')->onDelete('cascade');
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
