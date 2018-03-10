<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508743221AssetsLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_locations', function (Blueprint $table) {
            if(! Schema::hasColumn('assets_locations', 'deleted_at')) {
                $table->softDeletes();
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
        Schema::table('assets_locations', function (Blueprint $table) {
            if(Schema::hasColumn('assets_locations', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
