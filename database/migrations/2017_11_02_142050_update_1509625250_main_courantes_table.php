<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1509625250MainCourantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_courantes', function (Blueprint $table) {
            
if (!Schema::hasColumn('main_courantes', 'photo1')) {
                $table->string('photo1');
                }
if (!Schema::hasColumn('main_courantes', 'photo2')) {
                $table->string('photo2');
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
        Schema::table('main_courantes', function (Blueprint $table) {
            $table->dropColumn('photo1');
            $table->dropColumn('photo2');
            
        });

    }
}
