<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a2a4ef921bc6RelationshipsToAbsenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('absences', function(Blueprint $table) {
            if (!Schema::hasColumn('absences', 'personnel_id')) {
                $table->integer('personnel_id')->unsigned()->nullable();
                $table->foreign('personnel_id', '96645_5a2a4ef7a35fd')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
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
        Schema::table('absences', function(Blueprint $table) {
            
        });
    }
}
