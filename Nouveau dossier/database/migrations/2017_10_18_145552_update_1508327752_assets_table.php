<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508327752AssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            if(! Schema::hasColumn('assets', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
            
if (!Schema::hasColumn('assets', 'latitude')) {
                $table->string('latitude');
                }
if (!Schema::hasColumn('assets', 'longitude')) {
                $table->string('longitude');
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
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            
        });
Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
