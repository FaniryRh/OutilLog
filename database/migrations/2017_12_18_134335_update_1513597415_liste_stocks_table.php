<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1513597415ListeStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liste_stocks', function (Blueprint $table) {
            if(! Schema::hasColumn('liste_stocks', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('liste_stocks', function (Blueprint $table) {
            
if (!Schema::hasColumn('liste_stocks', 'photo')) {
                $table->string('photo');
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
        Schema::table('liste_stocks', function (Blueprint $table) {
            $table->dropColumn('photo');
            
        });
Schema::table('liste_stocks', function (Blueprint $table) {
            if(Schema::hasColumn('liste_stocks', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
