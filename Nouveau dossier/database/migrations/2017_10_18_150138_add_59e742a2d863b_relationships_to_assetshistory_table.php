<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59e742a2d863bRelationshipsToAssetsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_histories', function(Blueprint $table) {
            if (!Schema::hasColumn('assets_histories', 'asset_id')) {
                $table->integer('asset_id')->unsigned()->nullable();
                $table->foreign('asset_id', '82955_59e723ef6ea37')->references('id')->on('assets')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '82955_59e723ef75e31')->references('id')->on('assets_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '82955_59e723ef7ce09')->references('id')->on('assets_locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'latitude_id')) {
                $table->integer('latitude_id')->unsigned()->nullable();
                $table->foreign('latitude_id', '82955_59e742643e5b1')->references('id')->on('assets')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'longitude_id')) {
                $table->integer('longitude_id')->unsigned()->nullable();
                $table->foreign('longitude_id', '82955_59e742651fc84')->references('id')->on('assets')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'assigned_user_id')) {
                $table->integer('assigned_user_id')->unsigned()->nullable();
                $table->foreign('assigned_user_id', '82955_59e723ef83e07')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('assets_histories', function(Blueprint $table) {
            
        });
    }
}
