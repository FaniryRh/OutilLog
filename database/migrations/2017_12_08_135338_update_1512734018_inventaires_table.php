<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1512734018InventairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventaires', function (Blueprint $table) {
            if(Schema::hasColumn('inventaires', 'asset_id')) {
                $table->dropForeign('93575_5a1e6746c3c5c');
                $table->dropIndex('93575_5a1e6746c3c5c');
                $table->dropColumn('asset_id');
            }
            if(Schema::hasColumn('inventaires', 'nombre')) {
                $table->dropColumn('nombre');
            }
            
        });
Schema::table('inventaires', function (Blueprint $table) {
            if(! Schema::hasColumn('inventaires', 'deleted_at')) {
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
        Schema::table('inventaires', function (Blueprint $table) {
            if(Schema::hasColumn('inventaires', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('inventaires', function (Blueprint $table) {
                        $table->integer('nombre')->nullable()->unsigned();
                
        });

    }
}
