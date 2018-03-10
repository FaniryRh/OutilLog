<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59dcca4c46ca7RelationshipsToPrefectureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prefectures', function(Blueprint $table) {
            if (!Schema::hasColumn('prefectures', 'region_id')) {
                $table->integer('region_id')->unsigned()->nullable();
                $table->foreign('region_id', '80503_59dcca4b4c152')->references('id')->on('regions')->onDelete('cascade');
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
        Schema::table('prefectures', function(Blueprint $table) {
            
        });
    }
}
