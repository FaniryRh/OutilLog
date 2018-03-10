<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508328097AssetsHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_histories', function (Blueprint $table) {
            if(Schema::hasColumn('assets_histories', 'latitude_id')) {
                $table->dropForeign('82955_59e742643e5b1');
                $table->dropIndex('82955_59e742643e5b1');
                $table->dropColumn('latitude_id');
            }
            if(Schema::hasColumn('assets_histories', 'longitude_id')) {
                $table->dropForeign('82955_59e742651fc84');
                $table->dropIndex('82955_59e742651fc84');
                $table->dropColumn('longitude_id');
            }
            
        });
Schema::table('assets_histories', function (Blueprint $table) {
            if(! Schema::hasColumn('assets_histories', 'deleted_at')) {
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
        Schema::table('assets_histories', function (Blueprint $table) {
            if(Schema::hasColumn('assets_histories', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('assets_histories', function (Blueprint $table) {
                        
        });

    }
}
