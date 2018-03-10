<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59edb07d5406eRelationshipsToMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('missions', function(Blueprint $table) {
            if (!Schema::hasColumn('missions', 'rc_id')) {
                $table->integer('rc_id')->unsigned()->nullable();
                $table->foreign('rc_id', '83146_59e85b975cb8d')->references('id')->on('risque_catastrophes')->onDelete('cascade');
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
