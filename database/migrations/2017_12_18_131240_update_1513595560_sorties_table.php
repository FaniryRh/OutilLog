<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1513595560SortiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sorties', function (Blueprint $table) {
            if(Schema::hasColumn('sorties', 'parsonnel_id')) {
                $table->dropForeign('93574_5a37a260a04d7');
                $table->dropIndex('93574_5a37a260a04d7');
                $table->dropColumn('parsonnel_id');
            }
            if(Schema::hasColumn('sorties', 'mission_id')) {
                $table->dropForeign('93574_5a37a26562a65');
                $table->dropIndex('93574_5a37a26562a65');
                $table->dropColumn('mission_id');
            }
            if(Schema::hasColumn('sorties', 'dateheurfin')) {
                $table->dropColumn('dateheurfin');
            }
            if(Schema::hasColumn('sorties', 'statut_id')) {
                $table->dropForeign('93574_5a37a267acf6d');
                $table->dropIndex('93574_5a37a267acf6d');
                $table->dropColumn('statut_id');
            }
            if(Schema::hasColumn('sorties', 'reponsable_sortie')) {
                $table->dropColumn('reponsable_sortie');
            }
            
        });
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
Schema::table('sorties', function (Blueprint $table) {
                        $table->date('dateheurfin')->nullable();
                $table->string('reponsable_sortie');
                
        });

    }
}
