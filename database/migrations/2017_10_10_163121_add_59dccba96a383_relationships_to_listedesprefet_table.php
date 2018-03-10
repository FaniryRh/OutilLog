<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dccba96a383RelationshipsToListeDesPrefetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liste_des_prefets', function(Blueprint $table) {
            if (!Schema::hasColumn('liste_des_prefets', 'province_id')) {
                $table->integer('province_id')->unsigned()->nullable();
                $table->foreign('province_id', '80504_59dccba84c331')->references('id')->on('provinces')->onDelete('cascade');
                }
                if (!Schema::hasColumn('liste_des_prefets', 'region_id')) {
                $table->integer('region_id')->unsigned()->nullable();
                $table->foreign('region_id', '80504_59dccba8536da')->references('id')->on('regions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('liste_des_prefets', 'prefecture_id')) {
                $table->integer('prefecture_id')->unsigned()->nullable();
                $table->foreign('prefecture_id', '80504_59dccba85a95e')->references('id')->on('prefectures')->onDelete('cascade');
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
        Schema::table('liste_des_prefets', function(Blueprint $table) {
            
        });
    }
}
