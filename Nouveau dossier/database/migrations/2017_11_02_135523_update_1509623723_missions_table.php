<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1509623723MissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('missions', function (Blueprint $table) {
            if(Schema::hasColumn('missions', 'rc_id')) {
                $table->dropForeign('83146_59e85b975cb8d');
                $table->dropIndex('83146_59e85b975cb8d');
                $table->dropColumn('rc_id');
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
        Schema::table('missions', function (Blueprint $table) {
                        
        });

    }
}
