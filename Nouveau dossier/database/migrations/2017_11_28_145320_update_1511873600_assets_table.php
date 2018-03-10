<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1511873600AssetsTable extends Migration
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
            
if (!Schema::hasColumn('assets', 'date_acquisition')) {
                $table->datetime('date_acquisition')->nullable();
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
            $table->dropColumn('date_acquisition');
            
        });
Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
