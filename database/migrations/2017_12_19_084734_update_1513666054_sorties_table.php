<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1513666054SortiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sorties', function (Blueprint $table) {
            if(! Schema::hasColumn('sorties', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('sorties', function (Blueprint $table) {
            
if (!Schema::hasColumn('sorties', 'location_address')) {
                $table->string('location_address');
                $table->double('location_latitude');
                $table->double('location_longitude');
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
        Schema::table('sorties', function (Blueprint $table) {
            $table->dropColumn('location_address');
            $table->dropColumn('location_latitude');
            $table->dropColumn('location_longitude');
            
        });
Schema::table('sorties', function (Blueprint $table) {
            if(Schema::hasColumn('sorties', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
