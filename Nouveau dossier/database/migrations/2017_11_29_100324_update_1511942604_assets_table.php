<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1511942604AssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'quantite_stock')) {
                $table->dropColumn('quantite_stock');
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
            if(! Schema::hasColumn('assets', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
            
if (!Schema::hasColumn('assets', 'quantite_stock')) {
                $table->integer('quantite_stock')->nullable()->unsigned();
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
            $table->dropColumn('quantite_stock');
            
        });
Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
                        $table->integer('quantite_stock')->nullable()->unsigned();
                
        });

    }
}
