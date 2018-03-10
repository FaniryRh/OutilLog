<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a1e94123cdf4RelationshipsToTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function(Blueprint $table) {
            if (!Schema::hasColumn('tasks', 'type_id')) {
                $table->integer('type_id')->unsigned()->nullable();
                $table->foreign('type_id', '82948_5a1e9202a3f08')->references('id')->on('type_taches')->onDelete('cascade');
                }
                if (!Schema::hasColumn('tasks', 'mission_id')) {
                $table->integer('mission_id')->unsigned()->nullable();
                $table->foreign('mission_id', '82948_5a1e9203b484b')->references('id')->on('missions')->onDelete('cascade');
                }
                if (!Schema::hasColumn('tasks', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '82948_59e7238fbc227')->references('id')->on('task_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('tasks', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '82948_59e7238fc4237')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
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
        Schema::table('tasks', function(Blueprint $table) {
            
        });
    }
}
