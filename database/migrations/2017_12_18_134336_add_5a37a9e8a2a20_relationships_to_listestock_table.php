<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a37a9e8a2a20RelationshipsToListeStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liste_stocks', function(Blueprint $table) {
            if (!Schema::hasColumn('liste_stocks', 'unite_id')) {
                $table->integer('unite_id')->unsigned()->nullable();
                $table->foreign('unite_id', '93572_5a1e60280cc68')->references('id')->on('unites')->onDelete('cascade');
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
        Schema::table('liste_stocks', function(Blueprint $table) {
            
        });
    }
}
