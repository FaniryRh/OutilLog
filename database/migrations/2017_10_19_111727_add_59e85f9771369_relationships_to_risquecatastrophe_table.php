<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e85f9771369RelationshipsToRisqueCatastropheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('risque_catastrophes', function(Blueprint $table) {
            if (!Schema::hasColumn('risque_catastrophes', 'type_risque_id')) {
                $table->integer('type_risque_id')->unsigned()->nullable();
                $table->foreign('type_risque_id', '83140_59e8560923a29')->references('id')->on('type_risques')->onDelete('cascade');
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
        Schema::table('risque_catastrophes', function(Blueprint $table) {
            
        });
    }
}
