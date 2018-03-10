<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508327834AssetsStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_statuses', function (Blueprint $table) {
            if(! Schema::hasColumn('assets_statuses', 'deleted_at')) {
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
        Schema::table('assets_statuses', function (Blueprint $table) {
            if(Schema::hasColumn('assets_statuses', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
