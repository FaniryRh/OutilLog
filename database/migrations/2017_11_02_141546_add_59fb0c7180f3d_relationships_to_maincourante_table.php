<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59fb0c7180f3dRelationshipsToMainCouranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_courantes', function(Blueprint $table) {
            if (!Schema::hasColumn('main_courantes', 'event_id')) {
                $table->integer('event_id')->unsigned()->nullable();
                $table->foreign('event_id', '86451_59fb0b4ee8394')->references('id')->on('type_risques')->onDelete('cascade');
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
        Schema::table('main_courantes', function(Blueprint $table) {
            
        });
    }
}
