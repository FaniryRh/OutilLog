<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e73caca01e8RelationshipsToAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function(Blueprint $table) {
            if (!Schema::hasColumn('assets', 'category_id')) {
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', '82954_59e723e82c85c')->references('id')->on('assets_categories')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '82954_59e723e83428f')->references('id')->on('assets_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '82954_59e723e83bec5')->references('id')->on('assets_locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets', 'assigned_user_id')) {
                $table->integer('assigned_user_id')->unsigned()->nullable();
                $table->foreign('assigned_user_id', '82954_59e723e844198')->references('id')->on('personnel_du_bngrcs')->onDelete('cascade');
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
        Schema::table('assets', function(Blueprint $table) {
            
        });
    }
}
