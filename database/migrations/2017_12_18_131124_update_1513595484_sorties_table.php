<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1513595484SortiesTable extends Migration
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
            
if (!Schema::hasColumn('sorties', 'dateheurfin')) {
                $table->date('dateheurfin')->nullable();
                }
if (!Schema::hasColumn('sorties', 'reponsable_sortie')) {
                $table->string('reponsable_sortie');
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
            $table->dropColumn('dateheurfin');
            $table->dropColumn('reponsable_sortie');
            
        });
Schema::table('sorties', function (Blueprint $table) {
            if(Schema::hasColumn('sorties', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
