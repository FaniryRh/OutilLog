<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1511947317SortiesTable extends Migration
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
            
if (!Schema::hasColumn('sorties', 'date')) {
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
        Schema::table('sorties', function (Blueprint $table) {
            $table->dropColumn('date');
            
        });
Schema::table('sorties', function (Blueprint $table) {
            if(Schema::hasColumn('sorties', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
