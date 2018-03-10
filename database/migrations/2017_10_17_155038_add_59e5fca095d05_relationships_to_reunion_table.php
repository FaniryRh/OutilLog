<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e5fca095d05RelationshipsToReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reunions', function(Blueprint $table) {
            if (!Schema::hasColumn('reunions', 'personnel_id')) {
                $table->integer('personnel_id')->unsigned()->nullable();
                $table->foreign('personnel_id', '82681_59e5fc9f8a918')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
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
        Schema::table('reunions', function(Blueprint $table) {
            
        });
    }
}
