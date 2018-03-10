<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a38e151994f5RelationshipsToMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('missions', function(Blueprint $table) {
            if (!Schema::hasColumn('missions', 'stat_id')) {
                $table->integer('stat_id')->unsigned()->nullable();
                $table->foreign('stat_id', '83146_5a140c97a473a')->references('id')->on('statut_missions')->onDelete('cascade');
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
        Schema::table('missions', function(Blueprint $table) {
            
        });
    }
}
