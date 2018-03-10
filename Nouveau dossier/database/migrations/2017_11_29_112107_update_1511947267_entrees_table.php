<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1511947267EntreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entrees', function (Blueprint $table) {
            if(! Schema::hasColumn('entrees', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('entrees', function (Blueprint $table) {
            
if (!Schema::hasColumn('entrees', 'date')) {
                $table->datetime('date')->nullable();
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
        Schema::table('entrees', function (Blueprint $table) {
            $table->dropColumn('date');
            
        });
Schema::table('entrees', function (Blueprint $table) {
            if(Schema::hasColumn('entrees', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
