<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a2e228c9ee78RelationshipsToPersonnelDuBngrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personnel_du_bngrcs', function(Blueprint $table) {
            if (!Schema::hasColumn('personnel_du_bngrcs', 'statut_id')) {
                $table->integer('statut_id')->unsigned()->nullable();
                $table->foreign('statut_id', '80794_5a2e228b2fb2e')->references('id')->on('statut_personnels')->onDelete('cascade');
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
        Schema::table('personnel_du_bngrcs', function(Blueprint $table) {
            
        });
    }
}
