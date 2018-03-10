<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a1e63ae55694RelationshipsToEntreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entrees', function(Blueprint $table) {
            if (!Schema::hasColumn('entrees', 'stock_id')) {
                $table->integer('stock_id')->unsigned()->nullable();
                $table->foreign('stock_id', '93573_5a1e61bf4ace9')->references('id')->on('liste_stocks')->onDelete('cascade');
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
        Schema::table('entrees', function(Blueprint $table) {
            
        });
    }
}
