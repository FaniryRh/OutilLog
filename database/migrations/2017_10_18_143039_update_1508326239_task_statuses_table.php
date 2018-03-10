<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508326239TaskStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_statuses', function (Blueprint $table) {
            if(! Schema::hasColumn('task_statuses', 'deleted_at')) {
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
        Schema::table('task_statuses', function (Blueprint $table) {
            if(Schema::hasColumn('task_statuses', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
