<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508416930AssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'peronnel_id')) {
                $table->dropForeign('82954_59e89d5e7f873');
                $table->dropIndex('82954_59e89d5e7f873');
                $table->dropColumn('peronnel_id');
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
            if(! Schema::hasColumn('assets', 'deleted_at')) {
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
        Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
                        
        });

    }
}
