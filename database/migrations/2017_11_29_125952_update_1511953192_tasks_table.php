<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1511953192TasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            if(Schema::hasColumn('tasks', 'type_id')) {
                $table->dropForeign('82948_5a1e9202a3f08');
                $table->dropIndex('82948_5a1e9202a3f08');
                $table->dropColumn('type_id');
            }
            if(Schema::hasColumn('tasks', 'mission_id')) {
                $table->dropForeign('82948_5a1e9203b484b');
                $table->dropIndex('82948_5a1e9203b484b');
                $table->dropColumn('mission_id');
            }
            
        });
Schema::table('tasks', function (Blueprint $table) {
            if(! Schema::hasColumn('tasks', 'deleted_at')) {
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
        Schema::table('tasks', function (Blueprint $table) {
            if(Schema::hasColumn('tasks', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('tasks', function (Blueprint $table) {
                        
        });

    }
}
